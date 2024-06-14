<!-- Session manage-->
<?php 
session_start();
ob_start(); // Start output buffering
if(!isset($_SESSION['username']) ){
    header("location:login.php"); 
	
	
}
elseif($_SESSION['usertype']=='amin')
{
    header("location:login.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Teacher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-store" />

    <?php include "cdn.php"; ?>
    <!-- admin sidebar -->
  <style>
	<!-- ক্যালেন্ডারের ব্যাকগ্রাউন্ট  color সেট -->
	.ui-datepicker {
	background-color:#def;
	}
	</style>	 
</head>
<body>
<?php 
include "menu/panel_nav_top.php";
?>
<!-- This section for admin menu bar -->
<div class="row">	
<?php 
include "menu/adminmenu.php";
?>
<div class="col-md-10">
<div class="container"style="padding-left:5%">
    <br><br><br>
    <!-- All Applied students data -->
   

    <div class="bg-light" style="padding:20px;width:70%;border-radius: 15px;">
	 <h1 class="text-center"><u>Add Teacher</u></h1>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ?>
		
	<?php if (isset($_SESSION['message'])): ?>
    <h2 class="text-success"><?php echo $_SESSION['message']; ?></h2>
    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
	<?php endif; ?>


        <!-- Let's write some PHP code to connect this form to the database -->
        <?php 
        include "connect.php";

        if (isset($_POST['add_teacher'])) {
            if (isset(
					$_POST['username'],
					$_POST['fname'],
					$_POST['gender'],
					$_POST['father'],
					$_POST['mother'],
					$_POST['present_address'],
					$_POST['permanent_address'],
					$_POST['department'],
					$_POST['job_title'],
					$_POST['joiningdate'],
					$_POST['jobtype'],
					$_POST['salary'],
					$_POST['nid'],
					$_POST['email'],
					$_POST['phone'],
					$_POST['password']	
					)) 
			{
                $username = $_POST['username'];
                $fname = $_POST['fname'];
                $gender = $_POST['gender'];
                $father = $_POST['father'];
                $mother = $_POST['mother'];
                $present_address = $_POST['present_address'];
                $permanent_address = $_POST['permanent_address'];
                $department = $_POST['department'];
                $job_title = $_POST['job_title']; 
				$joiningdate = $_POST['joiningdate'];
				
                $job_type = $_POST['jobtype'];
                $salary = $_POST['salary'];
                $nid = $_POST['nid'];
                $user_email = $_POST['email'];
                $user_phone = $_POST['phone'];
                $user_password = $_POST['password'];
                $usertype = "teacher";
				/* Let's calculate semeter fee */
					

                /* File Upload */
                if (isset($_FILES['profile_picture'])) {
                    $file_name = $_FILES['profile_picture']['name'];
                    $file_tmp = $_FILES['profile_picture']['tmp_name'];
                    $file_type = $_FILES['profile_picture']['type'];
                    $file_size = $_FILES['profile_picture']['size'];

                    // Define allowed file types (you can customize this list)
                    $allowed_extensions = array("jpeg", "jpg", "png", "gif");
                    $file_parts = explode('.', $file_name);
                    $file_extension = strtolower(end($file_parts));

                    // Check if the file extension is in the allowed list
                    if (in_array($file_extension, $allowed_extensions)) {
                        // Define the directory where you want to save the uploaded files
                        $upload_directory = "uploads/"; // Change this to your desired directory

                        // Create a unique file name to avoid overwriting existing files
                        $unique_file_name = time() . '_' . $file_name;

                        // Move the uploaded file to the desired directory
                        if (move_uploaded_file($file_tmp, $upload_directory . $unique_file_name)) {
                            // File upload was successful, you can save the file name in the database or perform other operations here
$sql = "INSERT INTO user (username, fname, gender, father, mother, present_address, permanent_address, department, job_title, joiningdate, jobtype, salary,nid, email, phone, usertype, password, profile_picture)
        VALUES ('$username', '$fname', '$gender', '$father', '$mother', '$present_address', '$permanent_address', '$department', '$job_title', '$joiningdate', '$job_type', '$salary','$nid', '$user_email', '$user_phone', '$usertype', '$user_password', '$unique_file_name')";

							
                            $result = mysqli_query($data, $sql);
							
							if ($result) {
								$_SESSION['message'] = "Data uploaded Successfully!";
							} else {
								$_SESSION['message'] = "Upload Failed!";
							}

							if (!isset($_FILES['profile_picture']) || !in_array($file_extension, $allowed_extensions)) {
								$_SESSION['message'] = "Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.";
							}

							header('location:add_teacher.php');
							ob_end_flush(); // Flush the output buffer
                        }
                    } else {
                        $_SESSION['message'] = "Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.";
                    }
                }
            }
        }
        ?>

     <form action="add_teacher.php" enctype="multipart/form-data" method="POST"id="teacherForm">

            <div class="form-group">
                <label for="uname">Username:</label>               
				<input type="text" class="form-control"  placeholder="Enter an unique username" name="username" id="username" required>
				<span id="usernameMessage"></span>
            </div>

            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control"  placeholder="Enter Your Full name" name="fname" required>
			</div>
			
				<div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female" checked>Female
                </label>
                </div>
                <div class="form-check-inline">
                <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="Male">Male
                </label>
                </div>
               
				<div class="form-inline" style="border:2px solid #def;padding:5px;">
				  <div class="form-group mr-2">
					<label for="fullname">Father's Name :</label>
					<input type="text" class="form-control" placeholder="Enter Your Father's name" name="father" required>
				  </div>
				  <div class="form-group">
					<label for="fullname">Mother's Name :</label>
					<input type="text" class="form-control" placeholder="Enter Your Mother's name" name="mother" required>
				  </div>
				</div>

            
            <div class="form-group">
                <label for="comment">Present Address:</label>
                <textarea class="form-control" rows="2" id="comment" name="present_address"></textarea>
            </div>
            <div class="form-group">
                <label for="comment">Permanent Address:</label>
                <textarea class="form-control" rows="2" id="comment" name="permanent_address"></textarea>
            </div>	 
				
				
				<div class="form-inline" style="border:2px solid #def;padding:10px;">
				  <div class="form-group mr-2">
								<?php 
		include "connect.php";

		$sql = "SELECT department_code FROM departments WHERE department_code !='ALL'";
		$result = mysqli_query($data, $sql);
	?>

				<select id="departments" name="department_code" class="form-control">
				<option selected disabled>Departments</option>
				<?php while($info = $result->fetch_assoc()) { ?>
				
					<option value='<?php echo "{$info['department_code']}"; ?>'>
					<?php echo "{$info['department_code']}"; ?>
					</option>
					
				<?php }
				$data->close();
				
				?>
			
				</select>
				  </div>
				  <div class="form-group mr-2">
					<label for="selected_date">JoiningDate: </label>	 
					 <input type="date" id="selected_date" name="joiningdate">  
				  </div>
				  
				</div>
				<div class="form-inline" style="border:2px solid #def;padding:5px;">
					<div class="form-group">
					<label for="fullname">JobTitle:</label>
					<input type="text" class="form-control"  placeholder="Enter Job Title" name="job_title" required>
					</div>
				  <div class="form-group mr-2">
					<label for="uname">Salary:</label>
					<input type="number" class="form-control"  placeholder="Salary" name="salary" required>
				  </div> 
				  <div class="form-group mr-2"style="margin-top:5px">
					<label for="uname">JobType:</label>
					<select name="jobtype" class="custom-select mb-3"required>
					  <option disabled>Choose Job type</option>
					  <option value="Full Time" selected>Full Time</option>
					  <option value="Part Time">Part Time</option>	  
					  <option value="Contrctual">Contrctual</option>	  
					</select>
				  </div> 
				  
				</div>
				
			<div class="form-group">
                <label for="nid">NID:</label>
                <input type="number" class="form-control"  placeholder="Enter Your NID card Number" name="nid" required>
			</div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  placeholder="Enter an unique email" name="email" required>
            </div>
			
            <div class="form-group">
				<label for="phone">Phone Number:</label>
				<input type="tel" class="form-control" placeholder="Enter an unique phone" name="phone" id="phone" required>
				<div id="phoneMessage" class="text-danger"></div>			
			</div>


            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="profile_picture" required>
                    <label class="custom-file-label" for="customFile">Choose your profile picture</label>
                </div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" value="Add Teacher" name="add_teacher" >Add Teacher</button>
            <button type="reset" class="btn btn-primary"  value="reset">Reset</button>
        </form>
    </div>	
</div>
<?php 
//js form validation code included
include'tools/jsvalidation.php';
?>

</div>
</div>

</body>
</html>
