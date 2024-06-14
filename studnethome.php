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
		  <title>Student Dashbord</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		  <meta name="author" content="w3techbd" />
		<title>Student Dashbord</title>
		

<?php include"cdn.php";?>
		  <!--admin sideber-->
		  <!--Teacher's list-->
		  <style>
.teacher_card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  float: left;
  margin-left: 15px;
}

.teacher_card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container_detail {
  padding: 2px 16px;
}
.my_teacher{
  float: left;
  width: 30%;
  padding: 0 10px;
}
</style>
		  <!--Teacher's list-->
		  
	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>           
<div class="row">   
	<?php 
	include "menu/student_menu.php";
 ?>


<div style="margin:10px 50px 100px 200px">



<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>
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
                <p>Student Profile</p>
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
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo "{$info['student_id']}"; ?></p>
            <p class="mb-0"><strong class="pr-1">Current Semister:</strong>
			<span style="background-color: green;color: #fff;font-weight: bold;border-radius: 50%;padding: 5px 10px;text-align: center; margin-left: 5px;">
			<?php
				include'tools/current_semester.php';//  ছাত্রছাত্রী কোন সেমিস্টারে পড়ছে তা খুঁজে বের করা কোড
			?>
			</span>
			</p>
          </div>
        </div>
		<br>
		
		 <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
			<h3>Full Couser Fee</h3>
           
            <h2><?php echo"{$info['total_course_price']}"; ?>/-</h2>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Semester Fee:</strong><?php echo"{$info['semester_fee']}"; 
			
			$data->close();
			?>
			/-
			
			</p>
            <p class="mb-0"><strong class="pr-1">Total Paid:</strong>
			???
			</p>
			<p class="mb-0"><strong class="pr-1">Mid term Payment:</strong> ???</p>
			<p class="mb-0"><strong class="pr-1">Semester Payment Stutus:</strong>
			???
			</p>
          </div>
        </div>
		<br>
		<div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
		  <h2>Notice</h2>
          </div>
          <div class="card-body">
		  <marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount', 0, 0);this.stop();" onmouseout="this.setAttribute('scrollamount', 2, 0);this.start();" height="100px" scrollamount="2"> <!--Start marquee-->
               <div class="sidebar-list-post clearfix">
              <div class="sidebar-list-details">
                <h6 class="sidebar-list-title text-justify">
<?php
include "connect.php";

// Assume $name is the username of the logged-in user
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];

    // Fetch user department from the users table
    $user_query = "SELECT department FROM user WHERE username = '$name'";
    $user_result = mysqli_query($data, $user_query);

    if ($user_result) {
        $user_info = $user_result->fetch_assoc();
        $user_department = $user_info['department'];

        // Fetch notices for the user's department from the notice table
        $notice_query = "SELECT * FROM notice WHERE department_code = '$user_department' OR department_code = 'All' ORDER BY notice_id DESC";
        $notice_result = mysqli_query($data, $notice_query);

        if ($notice_result) {
            while ($notice_info = $notice_result->fetch_assoc()) {
                // Display notices in the user's dashboard
                echo "<p>{$notice_info['notice']}</p>";
            }
        } else {
            echo "Error fetching notices: " . mysqli_error($data);
        }
    } else {
        echo "Error fetching user information: " . mysqli_error($data);
    }
}
?>

                </h6>
           
              </div>

       </div>
          </marquee>
           <a href="all_notice .php" class="btn">See all</a>
          </div>
        </div>
		
		<?php }?>
		
      </div>
	  
      <div class="col-lg-8">
        <div class="card shadow-sm">
			<?php
		include 'connect.php';
		$name=$_SESSION['username'];
		$sql = "SELECT * FROM user WHERE username = '$name'";
		$result=mysqli_query($data,$sql);
		while($info=$result->fetch_assoc() )
                  {
              
	?>
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered table-hover">
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
                <th class="bg-info" width="30%">Batch</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['batch_no']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Category</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['degree']}"; ?></td>
              </tr>
              <tr>
                <th width="30%">Admission Year	</th>
                <td width="2%">:</td>
                <td><?php echo"$admissionYear"; ?></td>
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
                <td><?php echo "{$info['nid']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%;">Admission Date</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['time']}"; ?></td>
              </tr>
			  <tr>
                <th width="30%">Course Duration</th>
                <td width="2%">:</td>
                <td><?php echo "{$info['course_duration']}"; ?> Years</td>
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
				  <?php }?>
    </div>
	
	
  </div>
 
</div>
<!-- partial -->
           
    		</div>
		</div>
 <br><br>
	
    </div>
	
</section>
   <div class="container">
   
  <?php include"connect.php"; //database connection 


		
$sql="SELECT classroutine.*
FROM classroutine
JOIN user ON classroutine.batch_no = user.batch_no
WHERE user.username = '$username'";

 $result=mysqli_query($data,$sql); 
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
					<th>Teacher</th>
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
							<?php echo $start_time; ?> 
							<h5>To</h5>
							<?php echo $end_time; ?>
					</td>
					<td>
						<h6><?php echo "{$info['subject']}"; ?></h6>
						<h6><?php echo "{$info['subject_code']}"; ?></h6>
					</td>
					<td><?php echo "{$info['room']}"; ?></td>
					<td><?php echo "{$info['teacher']}"; ?></td>
					<td><?php echo "{$info['phone']}"; ?></td>
					<td><?php echo "{$info['email']}"; ?></td>
				 </tr>
				
				<?php }?>
				
				</tbody>
			
			</table>
		
		</div>
   
   
   </div>  




<!-- Teacher's list -->
	<div class="my_teacher">
		<h3>Your Class Teachers</h3>
		<div class="teacher_card">
		  <img src="uploads/1697270873_jotirmoy.jpg" alt="Avatar" style="width:100%">
		  <div class="container_detail">
			<h4><b>John Doe</b></h4> 
			<p>Architect & Engineer</p> 
		</div>
		</div>
		<div class="teacher_card">
		  <img src="uploads/1697270873_jotirmoy.jpg" alt="Avatar" style="width:100%">
		  <div class="container_detail">
			<h4><b>John Doe</b></h4> 
			<p>Architect & Engineer</p> 
		</div>
		</div>		
	</div>
	<!-- Teacher's list -->


</div>



</div>




</body>
</html>
