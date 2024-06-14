<?php 
session_start();

if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Admin Dashbord</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php include"cdn.php";?>
		  <!--admin sideber-->
		 

	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>
<div class="row"style="padding-left:5%">
 <?php 
	include "menu/adminmenu.php";
 ?>
 <div class="col-md-10"style="margin-left:5%">
 <!--Insert Subjec and subject code-->
	<div class="container">
		<br>
				  <?php
			error_reporting(E_ALL);
			ini_set('display_errors', 1);
			?>
				  <table class="table table-bordered" style="margin-left:-10%;">
				  <h3>Create New Rounie</h3>
		 <!--রুটিন টেবিলে ডাটা পাঠানোর জন্য  এখানে php কোড লিখব-->	
	<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="schoolproject";
	// সংযোগ পরীক্ষা
	$data=mysqli_connect($host,$user,$password,$db);
	if ($data===false) {
		die("সংযোগ ব্যর্থ হয়েছেঃ ");
	}
	if (isset($_POST['create_routine'])) {
		$days = $_POST['days'];
		$start_time = $_POST['start-time'];
		$end_time = $_POST['end-time'];

		$subject = $_POST['subject'];
		$subject_code = $_POST['subject_code'];
		$room = $_POST['room'];
		$teacher = $_POST['teacher'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		// Handle the batch_no as an array
		if (isset($_POST['batch_no']) && is_array($_POST['batch_no'])) {
			$batch_nos = $_POST['batch_no'];
			
			foreach ($batch_nos as $batch_no) {
				// Escape the values to prevent SQL injection
				$escaped_batch_no = mysqli_real_escape_string($data, $batch_no);
				$escaped_days = mysqli_real_escape_string($data, $days);
				$escaped_start_time = mysqli_real_escape_string($data, $start_time);
				$escaped_end_time = mysqli_real_escape_string($data, $end_time);
				$escaped_subject = mysqli_real_escape_string($data, $subject);
				$escaped_subject_code = mysqli_real_escape_string($data, $subject_code);
				$escaped_room = mysqli_real_escape_string($data, $room);
				$escaped_teacher = mysqli_real_escape_string($data, $teacher);
				$escaped_email = mysqli_real_escape_string($data, $email);
				$escaped_phone = mysqli_real_escape_string($data, $phone);

				// Build and execute the insert query for each selected batch number
				$sql = "INSERT INTO classroutine (batch_no, days, `start-time`, `end-time`, subject, subject_code, room, teacher, email, phone)
						VALUES ('$escaped_batch_no', '$escaped_days', '$escaped_start_time', '$escaped_end_time', '$escaped_subject', '$escaped_subject_code', '$escaped_room', '$escaped_teacher', '$escaped_email', '$escaped_phone')";

				if ($data->query($sql) === TRUE) {
					echo "Data inserted successfully for batch number: $batch_no<br>";
				} else {
					echo "Error: " . $sql . "<br>" . $data->error;
				}
			}
		}
	} 
	$data->close();
	?>



		 
		 <!--রুটিন টেবিলে ডাটা পাঠানোর জন্য  এখানে php কোড লিখা হলো-->		  
				  

						<thead class="shadow p-4 mb-4 bg-white" >
							  <tr>
									
									<th>Batch</th>
									<th>Day</th>
									<th>TimeRange</th>
									<th>Class</th>
									<th>Teacher</th>
									<th>Email</th>
									<th>Phone</th>
									
								</tr>
						</thead>
					<tbody>
				<tr>
				
		<form id="classForm" action="create_routine.php" enctype="multipart/form-data" method="POST" >
		
					<td>
					<?php 
			include "connect.php";

			$sql = "SELECT student_batch FROM studentbatch";
			$result = mysqli_query($data, $sql);
		?>

					<select id="batch" name="batch_no[]" multiple required>
					<option selected disabled> Select Batch</option>
					<?php while($info = $result->fetch_assoc()) { ?>
					
						<option value='<?php echo "{$info['student_batch']}"; ?>'>
						<?php echo "{$info['student_batch']}"; ?>
						</option>
						
					<?php }?>
				
					</select>
					
					</td>
					<td>
					<select name="days" class="custom-select mb-3"style="width:100px;"required>
					  <option disabled > Select Day</option>
					  <option value="Sunday">Sunday</option>
					  <option value="Monday">Monday</option>
					  <option value="Tuesday">Tuesday</option>
					  <option value="Wednesday">Wednesday</option>
					  <option value="Thursday">Thursday</option>
					  <option value="Friday">Friday</option>
					  <option value="Sunday">Sunday</option>
					</select>

					</td>
					<td>
				<p class="text-center">From</p>
		<input type="time" id="start-time" name="start-time" min="09:00" max="17:00" step="900"   required><br>
			<p class="text-center">To</p>
		<input type="time" id="end-time" name="end-time" min="09:00" max="17:00" step="900"  required><br>	
				  </td>
					<td>
		<?php 
			include "connect.php";

			$sql = "SELECT subject_name, subject_code FROM subjectsdetails";
			$result = mysqli_query($data, $sql);
		?>

		<h5>Subject:</h5>
		<select id="subject" name="subject" onchange="updateSubjectCode()" style="width:100px;"required>
		<option selected disabled >Select</option>
			<?php while($info = $result->fetch_assoc()) { ?>
			
				<option value='<?php echo "{$info['subject_name']}"; ?>'>
					<?php echo "{$info['subject_name']}"; ?>
				</option>
			<?php } ?>
		</select>

		<h5>Sub Code</h5>
		<select id="subjectcode" name="subject_code">
			<?php $result->data_seek(0); // Reset the result set pointer to the beginning ?>
			<?php while($info = $result->fetch_assoc()) { ?>
				<option value='<?php echo "{$info['subject_code']}"; ?>'>
					<?php echo "{$info['subject_code']}"; ?>
				</option>
			<?php } ?>
		</select>

		<script>
			function updateSubjectCode() {
				var subjectSelect = document.getElementById("subject");
				var subjectCodeSelect = document.getElementById("subjectcode");
				var selectedSubject = subjectSelect.value;
				
				// এখানে JavaScript ভ্যারিয়েবলের মধ্যে PHP ডাটা প্রেরণ করা হয়
				<?php
				$result->data_seek(0); // Reset the result set pointer to the beginning
				$subjectCodeMapping = array();
				while ($info = $result->fetch_assoc()) {
					$subjectCodeMapping[$info['subject_name']] = $info['subject_code'];
				}
				?>
				
				if (selectedSubject in <?php echo json_encode($subjectCodeMapping); ?>) {
					subjectCodeSelect.value = <?php echo json_encode($subjectCodeMapping); ?>[selectedSubject];
				}
			}
		</script>

							
					<h6>Room No</h6>
					<input type="text" class="form-controll"name="room" placeholder="Room:305" style="width:100px;" required>
					</td>
					<td>
						<?php 
		include "connect.php";

				$sql = "SELECT username, email, phone FROM user WHERE usertype='teacher'";
				$result = mysqli_query($data, $sql);
				
				$teacherCodeMapping = array();
				while ($info = $result->fetch_assoc()) {
					$teacherCodeMapping[$info['username']] = array(
						'email' => $info['email'],
						'phone' => $info['phone']
					);
				}
			?>
					<!--Select Teachers details-->	
							
				 <select id="teacher" name="teacher" onchange="updateTeacher()" required>
				 <?php foreach ($teacherCodeMapping as $username => $teacherData) { ?>
				 
					<option value="<?php echo $username; ?>">
						<?php echo $username; ?>
					</option>
				<?php }?>			
				</select>
				
		</td>
					<td>
					<select id="email" name="email" style="width:150px;">
					<?php $result->data_seek(0); // Reset the result set pointer to the beginning ?>
					<?php while($info = $result->fetch_assoc() ){?>
					<option value='<?php echo"{$info['email']}"; ?>'>
						<?php echo "{$info['email']}"; ?>
					</option>
					<?php }?>				
					</select>
					
					</td>
					<td>
					   <select id="phone" name="phone">
					   <?php $result->data_seek(0); ?>
					   <?php while($info=$result->fetch_assoc()) {?>
					   
						<option value='<?php echo"{$info['phone']}"; ?>'>
								<?php echo"{$info['phone']}"; ?>
						</option>
					   <?php }?>	
						</select>
					</td>
			
		<?php 
		include "connect.php";

		$sql = "SELECT username, email, phone FROM user WHERE usertype='teacher'";
		$result = mysqli_query($data, $sql);
		
		$teacherCodeMapping = array();
		while ($info = $result->fetch_assoc()) {
			$teacherCodeMapping[$info['username']] = array(
				'email' => $info['email'],
				'phone' => $info['phone']
			);
		}
	?>

	<script>
		function updateTeacher() {
			var teacherSelect = document.getElementById("teacher");
			var emailSelect = document.getElementById("email");
			var phoneSelect = document.getElementById("phone");
			var selectedTeacher = teacherSelect.value;

			var teacherData = <?php echo json_encode($teacherCodeMapping); ?>;
			if (selectedTeacher in teacherData) {
				emailSelect.value = teacherData[selectedTeacher].email;
				
				phoneSelect.value = teacherData[selectedTeacher].phone;
			}
		}
	</script>

		<tr class="shadow p-4 mb-4 " >
		<td colspan="7">
		 <button type="submit" class="btn btn-primary" name="create_routine" style="float:right" >Submit</button>
		 
		 <button type="reset" class="btn btn-primary"  value="reset">Reset</button>
		 </td>
		</tr>
					
		</form>
				</tr>	
				
					
					</tbody>
				  
				  </table>
		

		</div>
  </div>
  
</div>
</body>
</html>
