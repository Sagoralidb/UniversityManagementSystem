<?php 

session_start();

	if (!isset($_SESSION['usertype'])) {
		header("location: login.php");
		exit;
	}

if ($_SESSION['usertype'] !== "teacher" && $_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Teacher Profiles</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		  <meta name="author" content="w3techbd" />
		  
		<title>Teacher Profile</title>
		

<?php include"cdn.php";?>

		  <!--admin sideber-->
	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>


            
<div class="row">
       
	<?php 
	include "menu/teacher_menu.php";
 ?>


<div style="margin:10px 50px 100px 200px">



<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
                <p>Teachers Profile</p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
	<?php
		include 'connect.php';
		$name=$_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username = '$name'";
		$result=mysqli_query($data,$sql);
		while($info=$result->fetch_assoc() )
                  {
              
	?>
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
			<?php
					$profile_picture = $info['profile_picture']; // Get the image file name from the database
					$image_path = "uploads/" . $profile_picture; // Path to the image file
					echo "<img src='$image_path' class='profile_img' alt='N/A'/>";
					?>
            <h2><?php echo "{$info['username']}"; ?></h2>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Teacher ID:</strong><?php echo "{$info['id']}"; ?></p>
       
            <p class="mb-0"><strong class="pr-1">Section:</strong>CSE</p>
          </div>
        </div>
      </div>
	  
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Full Name</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['fname']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Father's Name</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['father']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Mother's Name</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['mother']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Department</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['department']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Category</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['degree']}"; ?></td>
              </tr>
         
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['gender']}"; ?></td>
              </tr>
              <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td>??</td>
              </tr>
              <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>??</td>
              </tr>
			  <tr>
                <th width="30%">Phone</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['phone']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['email']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">NID number</th>
                <td width="2%">:</td>
                <td>??</td>
              </tr>
			  <tr>
                <th width="30%;">Stated Date</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['time']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Working Duration</th>
                <td width="2%">:</td>
                <td>??</td>
              </tr>
			  <tr>
                <th width="30%">Day off</th>
                <td width="2%">:</td>
                <td>??</td>
              </tr>
			  
			   <tr>
                <th width="30%">Present Address</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['present_address']}"; ?></td>
              </tr>
			   <tr>
                <th width="30%">Permanet Address</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['permanent_address']}"; ?></td>
              </tr>
            </table>
          </div>
        </div>
         
      </div>
				  <?php } $data->close() ?>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     
 <div class="container">
<?php
include "connect.php"; // database connection file
$username = $_SESSION['username']; // Use the logged-in username লগইন করা ইউজার নেম এর উপর ভিত্তি করে উভয় টেবিল এস সাথে সমন্বয় করে ব্যক্তি তরা নিজের রুটিনং দেখতে পাবে 
$sql = "SELECT classroutine.*
        FROM user
        JOIN classroutine ON user.username = classroutine.teacher
        WHERE user.username = '$username'";

$result = mysqli_query($data, $sql);

if (!$result) {
    die("Error in SQL query: " . mysqli_error($data));
}
?>
		<div class="myRoutine card" >
		

			<table class="table table-bordered "style="text-align:center;background-color:white;">
					<tr>
						<td colspan="7" class="text-center"> <h2>Class Routine</h2></td>
					</tr>				
				 <tr>
					<th>Day</th>
					<th>Time</th>
					<th>Class</th>
					<th>Room</th>
					<th>Batch</th>
					<th>Phone</th>
					<th>Email</th>
				 </tr>
			 <tbody>
<?php 
while($info=$result->fetch_assoc() ){	
		//time conver
			$start_time = date('g:iA', strtotime($info['start-time']));
            $end_time = date('g:iA', strtotime($info['end-time']));
?>			 
				  <tr>
					<td><?php echo "{$info['days']}"; ?></td>
					<td>
					<?php 
			
					?>
							<?php echo $start_time; ?> 
							<h5>To</h5>
							<?php echo $end_time; ?>
					</td>
					<td>
						<h6><?php echo "{$info['subject']}"; ?></h6>
						<h6><?php echo "{$info['subject_code']}"; ?></h6>
					</td>
					<td><?php echo "{$info['room']}"; ?></td>
					<td><?php echo "{$info['batch_no']}"; ?></td>
					<td><?php echo "{$info['phone']}"; ?></td>
					<td><?php echo "{$info['email']}"; ?></td>
				 </tr>
				
				<?php }?>
				
				</tbody>
			
			</table>
		
		</div>
   
   
   </div> 

    <!-- Analytics -->

</div>



</div>





</body>
</html>
