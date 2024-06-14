<?php 

if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Update Student</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php include "cdn.php"; ?>
		<!-- admin sidebar -->
	</head>
	<body>
	<?php include "menu/panel_nav_top.php"; include "menu/adminmenu.php"; ?>
	<div class="container">
	<?php
	include"connect.php";

	$id = $_GET['user_id'];
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

	$updateImage = isset($_POST['update_image']) ? $_POST['update_image'] : false;

	if (isset($_POST['update']) && $updateImage) {
		// Check if a new image is uploaded
		if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['size'] > 0) {
			// Process the uploaded image
			$file_name = $_FILES['profile_picture']['name'];
			$file_tmp = $_FILES['profile_picture']['tmp_name'];
			$file_type = $_FILES['profile_picture']['type'];

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
					// Update user data with the new image end
		// You can use $semester_fee in your SQL query or display it as needed.
					$query = "UPDATE user SET username='{$_POST['username']}', 
					student_id='{$_POST['student_id']}',
					fname='{$_POST['fname']}', 
					father='{$_POST['father']}',
					mother='{$_POST['mother']}',
					gender='{$_POST['gender']}',
					present_address='{$_POST['present_address']}',
					permanent_address='{$_POST['permanent_address']}',
					department='{$_POST['department']}',
					degree='{$_POST['degree']}',
					batch_no='{$_POST['batch_no']}',
					course_duration='{$_POST['batch_no']}',
					total_course_price='{$_POST['total_course_price']}',			
					total_semester='{$_POST['total_semester']}',
					nid='{$_POST['nid']}', 
					email='{$_POST['email']}', 
					phone='{$_POST['phone']}', 
					password='{$_POST['password']}', 
					profile_picture='$unique_file_name' WHERE id='$id'";

					// Execute the update query
					$result2 = mysqli_query($data, $query);

					if ($result2) {
						echo "<h3 class='text-primary'>Data updated successfully!</h3>";
					} else {
						echo "<h3 class='text-warning'>Update failed: " . mysqli_error($data) . "</h3>";
					}
				} else {
					echo "<h3 class='text-warning'>Image upload failed!</h3>";
				}
			} else {
				echo "<h3 class='text-danger'>Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.</h3>";
			}
		} else {
			// 	calculate semester_fee
		$total_course_price = isset($_POST['total_course_price']) ? $_POST['total_course_price'] : $info['total_course_price'];
		$total_semester = isset($_POST['total_semester']) ? $_POST['total_semester'] : $info['total_semester'];
		$semester_fee = $total_course_price / $total_semester; // Initialize with a default value
		$course_duration =($total_semester*6)/12 ;// calculate course duration again
		

		if ($total_semester > 0) {
			$semester_fee = $total_course_price / $total_semester;
		}
			
			$query = "UPDATE user SET username='{$_POST['username']}',
					  student_id='{$_POST['student_id']}',			
					  fname='{$_POST['fname']}',
					  gender='{$_POST['gender']}',
					  father='{$_POST['father']}',
					  mother='{$_POST['mother']}',
					  present_address='{$_POST['present_address']}',
					  permanent_address='{$_POST['permanent_address']}',
					  department='{$_POST['department']}',
					  degree='{$_POST['degree']}',
					  batch_no='{$_POST['batch_no']}',
					  semester_fee='$semester_fee',
					  course_duration='$course_duration',
					  total_semester='{$_POST['total_semester']}',
					  total_course_price='{$_POST['total_course_price']}', 
					  nid='{$_POST['nid']}', 
					  email='{$_POST['email']}', 
					  phone='{$_POST['phone']}', 			
					  password='{$_POST['password']}' WHERE id='$id'";

			// Execute the update query
			$result2 = mysqli_query($data, $query);

			if ($result2) {
				echo "<h3 class='text-primary'>Data updated successfully!</h3>";
			} else {
				echo "<h3 class='text-warning'>Update failed: " . mysqli_error($data) . "</h3>";
			}
		}
	}
	?>
<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ?><br><br>
	
	<div class="bg-light" style="padding:20px;width:70%;border-radius: 15px;"> 
     <form action="#"  enctype="multipart/form-data" method="POST"id="studentForm">
	   
	  <div class="row form-group" style="padding:10px;">
				<div class="col-ms-6" style="margin-right:20px;">
					<label for="uname">Username:</label>               
					<input type="text" class="form-control"  placeholder="Enter an unique username" name="username" id="username"value="<?php echo isset($_POST['username']) ? $_POST['username'] : "{$info['username']}"; ?>" required>
					<span id="usernameMessage"></span>
				</div>
				<div class="col-ms-6">
					<label for="uname">Student ID:</label>               
					<input type="text" class="form-control" placeholder="Unique student id" name="student_id" id="student_id" pattern="[0-9]+" title="Please enter only numbers" value="<?php echo isset($_POST['student_id']) ? $_POST['student_id'] : "{$info['student_id']}"; ?>" required>
					<span id="usernameMessageSid"></span>
				</div>

            </div>
			

            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control"  placeholder="Enter Your Full name" name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : "{$info['fname']}"; ?>" required>
           
			</div>
				<div class="form-check-inline">
					<label class="form-check-label" for="radio1">
						<input type="radio" class="form-check-input" id="radio1" name="gender" value="Female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'Female') ? 'checked' : ($info['gender'] === 'Female' ? 'checked' : ''); ?> checked required>Female
					</label>
				</div>
				<div class="form-check-inline">
					<label class="form-check-label" for="radio2">
						<input type="radio" class="form-check-input" id="radio2" name="gender" value="Male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === 'Male') ? 'checked' : ($info['gender'] === 'Male' ? 'checked' : ''); ?>required>Male
					</label>
				</div>

               
				<div class="form-inline" style="border:2px solid #def;padding:10px;">
				  <div class="form-group mr-2">
					<label for="fullname">Father's Name :</label>
					<input type="text" class="form-control" placeholder="Enter Your Father's name" name="father"value="<?php echo isset($_POST['father']) ? $_POST['father'] : "{$info['father']}"; ?>" required>
				  </div>
				  <div class="form-group">
					<label for="fullname">Mother's Name :</label>
					<input type="text" class="form-control" placeholder="Enter Your Mother's name" name="mother"value="<?php echo isset($_POST['mother']) ? $_POST['mother'] : "{$info['mother']}"; ?>" required>
				  </div>
				</div>

            
            <div class="form-group">
                <label for="comment">Present Address:</label>
                <textarea class="form-control" rows="2" id="comment" name="present_address">
				<?php echo isset($_POST['present_address']) ? $_POST['present_address'] : "{$info['present_address']}"; ?>
				</textarea>

            </div>
            <div class="form-group">
                <label for="comment">Permanent Address:</label>  
				<textarea class="form-control" rows="2" id="comment" name="permanent_address">
				<?php echo isset($_POST['permanent_address']) ? $_POST['permanent_address'] : "{$info['permanent_address']}"; ?>
				</textarea>
			</div>	 
				
				
				<div class="form-inline" style="border:2px solid #def;padding:10px;">
				  <div class="form-group mr-2">
					<select name="department" class="custom-select mb-3" required>
						<option disabled>Choose you Department</option>
						<option value="CSE" <?php echo (isset($_POST['department']) && $_POST['department'] === 'CSE') ? 'selected' : (($info['department'] === 'CSE') ? 'selected' : ''); ?>>CSE</option>
						<option value="EEE" <?php echo (isset($_POST['department']) && $_POST['department'] === 'EEE') ? 'selected' : (($info['department'] === 'EEE') ? 'selected' : ''); ?>>EEE</option>
						<option value="Civil" <?php echo (isset($_POST['department']) && $_POST['department'] === 'Civil') ? 'selected' : (($info['department'] === 'Civil') ? 'selected' : ''); ?>>Civil</option>
					</select>

				  </div>		
			<div class="form-group">
				<label for="degree">Degree Name:</label>
				<div class="form-check-inline">
					<label class="form-check-label" for="radio1">
						<input type="radio" class="form-check-input" id="radio1" name="degree" value="BSc" <?php echo (isset($_POST['degree']) && $_POST['degree'] === 'BSc') ? 'checked' : (($info['degree'] === 'BSc') ? 'checked' : ''); ?> required>BSc
					</label>
				</div>

				<div class="form-check-inline">
					<label class="form-check-label" for="radio2">
						<input type="radio" class="form-check-input" id="radio2" name="degree" value="Diploma" <?php echo (isset($_POST['degree']) && $_POST['degree'] === 'Diploma') ? 'checked' : (($info['degree'] === 'Diploma') ? 'checked' : ''); ?> required>Diploma
					</label>
				</div>
			</div>


<div class="form-group">
    <label for="sel1">Batch No:</label>
    <?php
    include "connect.php";

    // Fetch batch numbers from studentbatch table
    $sql = "SELECT student_batch FROM studentbatch";
    $result = mysqli_query($data, $sql);
    ?>
    <select class="form-control" id="sel1" name="batch_no" required>
        <option selected disabled>Select Batch</option>
        <?php
        while ($batch_info = $result->fetch_assoc()) {
            $selected = (isset($_POST['batch_no']) && $_POST['batch_no'] == $batch_info['student_batch']) ? 'selected' : '';
            ?>
            <option value='<?php echo "{$batch_info['student_batch']}"; ?>' <?php echo $selected; ?>>
                <?php echo "{$batch_info['student_batch']}"; ?>
            </option>
            <?php
        }
        $data->close();
        ?>
    </select>
    
</div>

	


				  
				</div>
				<?php 
		include"connect.php";
	$id = $_GET['user_id'];
	$sql = "SELECT * FROM user WHERE id='$id'";
	$result = mysqli_query($data, $sql);
	$info = $result->fetch_assoc();

				?>
				
				<div class="form-inline" style="border:2px solid #def;padding:10px;">
				  <div class="form-group mr-2">
					<label for="uname">Total Course price:</label>
					<input type="number" class="form-control"  placeholder="Full course price" name="total_course_price"value="<?php echo isset($_POST['total_course_price']) ? $_POST['total_course_price'] : "{$info['total_course_price']}"; ?>" required>
				  </div>
				  <div class="form-group">
				  <label for="sel1">Total Semester:</label>
				  <select class="form-control" id="sel1" name="total_semester"value="<?php echo isset($_POST['total_semester']) ? $_POST['total_semester'] : "{$info['total_semester']}"; ?>">
					<option value="6" <?php echo (isset($_POST['total_semester']) && $_POST['total_semester'] === '6') ? 'selected' : (($info['total_semester'] === '6') ? 'selected' : ''); ?>>6</option>
					<option value="8" <?php echo (isset($_POST['total_semester']) && $_POST['total_semester'] === '8') ? 'selected' : (($info['total_semester'] === '8') ? 'selected' : ''); ?> >8</option>	
				  </select>
				  </div>
				</div>
			<div class="form-group">
                <label for="nid">NID:</label>
                <input type="number" class="form-control"  placeholder="Enter Your NID card Number" id="nid" name="nid"value="<?php echo isset($_POST['nid']) ? $_POST['nid'] : "{$info['nid']}"; ?>" required>
			<div id="nidMessage" class="text-danger"></div>
			</div>	
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  placeholder="Enter an unique email" id="email" name="email"value="<?php echo isset($_POST['email']) ? $_POST['email'] : "{$info['email']}"; ?>" required>
            <div id="emailMessage" class="text-danger"></div>
			</div>
            
			<div class="form-group">
				<label for="phone">Phone Number:</label>
				<input type="tel" class="form-control" placeholder="Enter an unique phone" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : "{$info['phone']}"; ?>" required>
				<div id="phoneMessage" class="text-danger"></div>
			
			</div>


            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="profile_picture"value="<?php echo isset($_POST['profile_picture']) ? $_POST['profile_picture'] : "{$info['profile_picture']}"; ?>">
                    <label class="custom-file-label" for="customFile">Choose your profile picture</label>
                </div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password"value="<?php echo isset($_POST['password']) ? $_POST['password'] : "{$info['password']}"; ?>" required>
            </div>
            <input class="form-control" type="submit" name="update" value="Update">
			<input type="hidden" name="update_image" value="true">
        </form>
    </div>
	</div>
	
	
<?php 
//js form validation code included
include'tools/jsvalidation.php';
?>
	</body>
	</html>
