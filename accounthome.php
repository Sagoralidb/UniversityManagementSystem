<?php 
// teacherhome.php, studenthome.php, adminhome.php সব পেজেই নিম্নলিখিত কোড থাকতে পারে
session_start();

// এক্ষেত্রে $_SESSION['usertype'] হিসেবে স্পেশাল সেশন ভেরিয়েবল ব্যবহার করা হবে
if (!isset($_SESSION['usertype'])) {
    header("location: login.php");
    exit;
}

// বর্তমান ইউজারের ইউজারটাইপ চেক করতে পারেন
if ($_SESSION['usertype'] !== "account") {
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Account Department Profile</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		  <meta name="author" content="w3techbd" />
		  
		<title>Account Department Profile</title>
		

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
                <p>Account Profile</p>
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
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo "{$info['id']}"; ?></p>
            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
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
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
              <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>B+</td>
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
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
    </div>
</section>
     


    <!-- Analytics -->

</div>



</div>





</body>
</html>
