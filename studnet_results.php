<?php 

session_start();

if (!isset($_SESSION['usertype'])) {
    header("location: login.php");
    exit;
}

if ($_SESSION['usertype'] !== "student" && $_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Student Result</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		  <meta name="author" content="w3techbd"/>		
<?php include"cdn.php";?>  
	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>           
<div class="row">   
	<?php 
	include "menu/student_menu.php";
 ?>
</div>
<div class="container">
<br><br>

		<div class="jumbotron col-ms-12">
			<h1 class="text-center text-info">
			<?php
	include "connect.php";

	$sql = "SELECT * FROM title ORDER BY id DESC LIMIT 1";
	$resultTitle = mysqli_query($data, $sql);

	if (!$resultTitle) {
		die("Title query failed: " . mysqli_error($data));
	}?>
	<?php
            while ($info = mysqli_fetch_assoc($resultTitle)) {
                echo $info['newtitle'];
            }
			// Close the database connection
		mysqli_close($data);
			?>
			
			</h1>
			
<?php
		include 'connect.php';
		$username=$_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username='$username'";
		$result=mysqli_query($data,$sql);
		while($info=$result->fetch_assoc() ){		
?>		
			<table class="table">
				<tr>
					<td >Student ID:<?php echo"{$info['student_id']}" ?></td>
					<td >
						<h5 class="text-center">Program:<?php echo"{$info['degree']} in {$info['department']}" ?></h5>
						<h6 class="text-center">Course Duration:<?php echo" {$info['course_duration']} years" ?></h6>
					</td>
				
					<td style="text-align:right">UserName:<?php echo"{$info['username']}"  ?></td>
				</tr>
			</table>
			<?php }	
			$data->close();
			?>
	<?php
include 'connect.php';

// Assuming $_SESSION['username'] contains the logged-in username
$username = $_SESSION['username'];

// Use a SQL query to join user and result tables on student_id
$sql = "SELECT user.student_id, user.username, result.subject_code, result.subject, result.assignment, result.attendance, result.classTest, result.midTerm, result.finalExam, subjectsdetails.sub_credit
        FROM user
        JOIN result ON user.student_id = result.student_id
        JOIN subjectsdetails ON result.subject = subjectsdetails.subject_name
        WHERE user.username = '$username'";



$result = mysqli_query($data, $sql);

// Check if the query was successful
if ($result) {
    // Move the table headers outside the while loop
    ?>
    <table class="table rounded-lg bg-white table-bordered table-striped rounded-table">
        <thead class="thead-light">   
            <tr class="text-center">
                <th>Exam Date</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                
                <th>Total Mark</th>
                <th>Grade Point</th>
                <th>Letter Grade</th>
				<th>Course Credit</th>
                <th>Earn Credit</th>
                
            </tr>   
        </thead>
        <tbody> 
    <?php
    // Fetch the data and display it in the table
    while ($info = mysqli_fetch_assoc($result)) {
    ?>
            <tr class="text-center">
                <td>
						<?php 
							$desiredDateFormate='Y-m-d';
							$timestamp=strtotime('2023-09-30');
							echo date($desiredDateFormate,$timestamp);			
						?>
				</td>
                <td><?php echo $info['subject_code']; ?></td>
                <td><?php echo $info['subject']; ?></td>
                
                <td>
				<?php 
				$totalMark=$info['assignment']+$info['attendance']+$info['classTest']+$info['midTerm']+$info['finalExam'];	
					echo $totalMark;
					?>
				</td>
                <td>
				<?php 
					$AvgMark=($totalMark/5);//উপরের $totalMark এর যোগফলকে ৫টি আলাদা Marking পদ্ধতী দিয়ে ভাগ
					$grade=$AvgMark/4;// যেহেতু সিজিপিয়ে ৪ তাই ৪ দিয়ে ভাগ করে Grade point বের করা হলো।
					echo $grade;
					?>
				</td>
                <td>
				<?php 
					switch($totalMark){
						case $totalMark>=80:
						echo"A+";
						break;
						
						case $totalMark>=70:
						echo"A";
						break;
						
						case $totalMark>=60;
						echo"A-";
						break;
						
						case $totalMark>=50;
						echo"B";
						break;
						
						case $totalMark>=40;
						echo"C";
						break;
						
						case $totalMark>=33;
						echo"D";
						break;
						
						default:
						echo"<h5 class='text-danger' style='rotate:90deg; margin-top:27px;'>Failed</h5>";						
					}
				?>
				</td>
				<td>	<?php echo $info['sub_credit']; ?></td>
                <td><?php
    if ($totalMark < 33) {
        echo "<h6 class='text-danger'>0</h6>";
    } else {
            echo $info['sub_credit'];
        } 
    ?></td>
               
            </tr>
			
			
    <?php
    }
    ?>
	<tr class="text-center">
				<td>??</td>
				<td>?</td>
				<td>?</td>
				<td>?</td>
				<td>?</td>
				<td>?</td>
				<td>?</td>
				<td>?</td>
			</tr>
	
        </tbody>
    </table>
				<?php
			} else {
				// Handle the case where the query fails
				echo "Error executing query: " . mysqli_error($data);
			}
			?>

		</div>

	
</div>

</body>
</html>
