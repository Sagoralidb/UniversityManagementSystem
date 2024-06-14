<?php 
session_start();
ob_start(); // Start output buffering
if(!isset($_SESSION['username']) ){
    header("location:login.php"); 
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php"); 
}

// Now, start your HTML document
?>

<html lang="en">
<!-- rest of the code -->
<head>
    <title>Add student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-store" />
    <?php include "cdn.php"; ?>
    <!-- admin sidebar -->
</head>
<body>
<?php 
include "menu/panel_nav_top.php";
?>
<div class="row">	
<!-- This section for admin menu bar -->
<?php 
include "menu/adminmenu.php";
?>
<div class="col-md-10">
<div class="container"style="padding-left:10%">
    <br><br><br>
    <!-- All Applied students data -->
    

    <div class="bg-light" style="padding:20px;width:70%;border-radius: 15px;">
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

        if (isset($_POST['add_student'])) {
		
	$username = mysqli_real_escape_string($data, $_POST['username']);
    $student_id = mysqli_real_escape_string($data, $_POST['student_id']);
    // ..প্রয়োজনে আর কোড লিখে তা চেক করা যাবে. (other form fields)	
			
	  // Check if student ID or username already exists
    $check_query = "SELECT * FROM user WHERE student_id = '$student_id' OR username = '$username'";
    $check_result = mysqli_query($data, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['message'] = "Student ID or username already exists. Please use a different one.";
    } else {
			
            if (isset($_POST['username'],$_POST['student_id'], $_POST['email'], $_POST['phone'], $_POST['password'])) {
                $username = $_POST['username'];
                $student_id = $_POST['student_id'];
                $fname = $_POST['fname'];
                $gender = $_POST['gender'];
                $father = $_POST['father'];
                $mother = $_POST['mother'];
                $present_address = $_POST['present_address'];
                $permanent_address = $_POST['permanent_address'];
                $department = $_POST['department'];
                $degree = $_POST['degree'];
                $batch_no = $_POST['batch_no'];
                $total_course_price = $_POST['total_course_price'];   
				$total_semester = $_POST['total_semester'];
				
                $nid = $_POST['nid'];
                $user_email = $_POST['email'];
                $user_phone = $_POST['phone'];
                $user_password = $_POST['password'];
                $usertype = "student";
				/* Let's calculate semeter fee */
				$semester_fee=$total_course_price/$total_semester;		
				// Let's calculate course duration
				$course_duration =($total_semester*6)/12 ;
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
                            $sql = "INSERT INTO user(username,student_id, fname,gender,father,mother,present_address,permanent_address,
							department,degree,batch_no,total_course_price,total_semester,course_duration,semester_fee,nid,email, phone, usertype, password, profile_picture) VALUES 
							('$username','$student_id', '$fname','$gender','$father','$mother','$present_address','$permanent_address',
							'$department','$degree','$batch_no','$total_course_price','$total_semester','$course_duration','$semester_fee','$nid','$user_email', '$user_phone', '$usertype', '$user_password', '$unique_file_name')";
							
                            $result = mysqli_query($data, $sql);
							
							if ($result) {
								$_SESSION['message'] = "Data uploaded Successfully!";
							} else {
								$_SESSION['message'] = "Upload Failed!";
							}

							if (!isset($_FILES['profile_picture']) || !in_array($file_extension, $allowed_extensions)) {
								$_SESSION['message'] = "Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.";
							}		
							
                        }
                    } else {
                        $_SESSION['message'] = "Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.";
                    }
					header('location:add_student.php');
					ob_end_flush(); // Flush the output buffer
                }
            }
        }
	}
  ?>

     <form action="add_student.php" onsubmit="return validateForm();" enctype="multipart/form-data" method="POST"id="studentForm">
<h1 class="text-center"><u> Student Form</u></h1>
            <div class="row form-group" style="padding:10px;">
				<div class="col-ms-6" style="margin-right:20px;">
					<label for="uname">Username:</label>               
					<input type="text" class="form-control"  placeholder="Enter an unique username" name="username" id="username" required>
					<span id="usernameMessage"></span>
				</div>
				<div class="col-ms-6">
					<label for="uname">Student ID:</label>               
					<input type="text" class="form-control" placeholder="Unique student id" name="student_id" id="student_id" pattern="[0-9]+" title="Please enter only numbers" required>
					<span id="usernameMessageSid"></span>
				</div>

            </div>

            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control"  placeholder="Enter Your Full name" name="fname" required>
           
			</div>
				<div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female" checked required>Female
                </label>
                </div>
                <div class="form-check-inline">
                <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" id="radio2" name="gender" value="Male" required>Male
                </label>
                </div>
               
				<div class="form-inline" style="border:2px solid #def;padding:10px;">
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
				<div class="form-group">
				<label for="uname">Degree Name:</label>
					<div class="form-check-inline">
					<label class="form-check-label" for="radio1">
						<input type="radio" class="form-check-input" id="radio1" name="degree" value="BSc" checked required>BSc
					</label>
					</div>
					
					<div class="form-check-inline">
					<label class="form-check-label" for="radio2">
						<input type="radio" class="form-check-input" id="radio2" name="degree" value="Diploma" required>Diploma.
					</label>
					</div>
				</div>
				<div class="form-group">
				  <label for="sel1">Batch No:</label>
				  <?php include"connect.php"; 
				  $sql = "SELECT student_batch FROM studentbatch";
				  $result = mysqli_query($data, $sql);
				  ?>
				  <select class="form-control" id="sel1" name="batch_no" required>
					<option selected disabled> Select Batch</option>
				<?php while($info = $result->fetch_assoc()) { ?>
				
					<option value='<?php echo "{$info['student_batch']}"; ?>'>
					<?php echo "{$info['student_batch']}"; ?>
					</option>
					
				<?php }?>
				  </select>
				  <div id="batchMessage" class="text-danger"></div>
				  </div>
				  
				  
				</div>
				
				
				<div class="form-inline" style="border:2px solid #def;padding:10px;">
				
				
				  <div class="form-group mr-2">
					<label for="uname">Total Course price:</label>
					<input type="number" class="form-control"  placeholder="Full course price" name="total_course_price" required>
				  </div>
				  <div class="form-group">
				  <label for="sel1">Total Semester:</label>
				  <select class="form-control" id="sel1" name="total_semester">
					<option>6</option>
					<option>8</option>	
				  </select>
				  </div>
				</div>
			<div class="form-group">
                <label for="nid">NID:</label>
                <input type="number" class="form-control"  placeholder="Enter Your NID card Number" id="nid" name="nid" required>
				<div id="nidMessage" class="text-danger"></div>					
			</div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  placeholder="Enter an unique email" id="email" name="email" required>
				<div id="emailMessage" class="text-danger"></div>
	
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
            <button type="submit" class="btn btn-primary" value="Add Student" name="add_student" >Add Student</button>
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
