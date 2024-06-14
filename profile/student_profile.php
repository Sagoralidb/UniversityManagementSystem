<?php 

if (!isset($_SESSION['usertype'])) {
    header("location: login.php");
    exit;
}

if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}

?>
<?php
include 'connect.php';
// Include session.php, cdn.php, and connect.php just like in your other PHP files

// Include session.php, cdn.php, and connect.php just like in your other PHP files

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    
    // Query the database to get the user's data
    $sql = "SELECT * FROM user WHERE id = $user_id";
    $result = mysqli_query($data, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $info = mysqli_fetch_assoc($result);
        // Display the user's profile data
        ?>
        <!DOCTYPE html>
        <html lang="en">
 	<head>
		  <title>Your Profile</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		  <meta name="author" content="w3techbd" />
		  
		<title>Student Profile Page Design Example</title>
		

<?php include"cdn.php";?>

		  <!--admin sideber-->
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
            	<h1>W3techbd </h1>
                <p>Profile</p>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">		
<div class="student-profile py-4">	
     <div class="container">
	 
		<div class="row">
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
            <p class="mb-0"><strong class="pr-1">User Type:</strong><?php echo "{$info['usertype']}"; ?></p>
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo "{$info['student_id']}"; ?></p>
            <p class="mb-0"><strong class="pr-1">Current Semister:</strong>
			<?php
				include'tools/current_semester.php';//  ছাত্রছাত্রী কোন সেমিস্টারে পড়ছে তা খুঁজে বের করা কোড
			?>
			
			</p>
          </div>
        </div>
		<br><br>
		
		 <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
			<h3>Full Couser Fee</h3>
           
            <h2><?php echo"{$info['total_course_price']}"; ?>/-</h2>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Semester Fee:</strong><?php echo"{$info['semester_fee']}"; ?>/-</p>
            <p class="mb-0"><strong class="pr-1">Total Paid:</strong>
			???
			</p>
			<p class="mb-0"><strong class="pr-1">Mid term Payment:</strong> ???</p>
			<p class="mb-0"><strong class="pr-1">Semester Payment Stutus:</strong>
			???
			</p>
          </div>
        </div>

      </div>
	  
                 <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <?php // This table is connected to two different file one is view profile and anther is studnet home 
				include"profile/generalinfo.php";
			?>
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
    </div>
	
	</div>
</div>
 </div>
</div>
</div>
</section>

</div>
</div>
 </body>
</html>
        <?php
    } else {
        // Handle the case where the user ID is not found
        echo "User not found.";
    }
} else {
    // Handle the case where 'user_id' is not set in the URL
    echo "User ID is missing.";
}
?>
