<?php 
session_start();
ob_start(); // Start output buffering
if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Result Manage</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">	  
   <link href="css/select2.min.css" rel="stylesheet">
   
    
	
<?php include"cdn.php"; ?> 	  


  <style> 
        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000000;
        }
        .form-container {
            padding: 20px !important;
            margin-right: -9% !important;
        }
   .form-container {
		  max-height: 500px !important;
		  overflow: auto !important;
		}
		
    </style>

	</head>
<body>
<?php  include "menu/panel_nav_top.php";?>
 <?php  include "menu/adminmenu.php"; ?>

<div class="container">
	<div class="row">
		<div class=" rounded-lg form-container">
		</div>
	<div class="col-sm-6">		
		<div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="text-center mb-4">Result Entry Form</h2>
	<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);		
    ?>	
	<?php if (isset($_SESSION['message'])): ?>
    <?php echo $_SESSION['message']; ?>
    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
	<?php endif; ?>	

<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ফর্ম ডাটা প্রাপ্ত করা
    $student_id = $_POST['student_id'];
    $examtype = $_POST['examtype'];
    $semister = $_POST['semister'];
    $examDate = $_POST['examDate'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];
    $assignment = $_POST['assignment'];
    $attendance = $_POST['attendance'];
    $classTest = $_POST['classTest'];
    $midTerm = $_POST['midTerm'];
    $finalExam = $_POST['finalExam'];

    // SQL কোয়েরি তৈরি করা
    $sql = "UPDATE result
            SET examtype='$examtype', semister='$semister', examDate='$examDate', subject='$subject',
                subject_code='$subject_code', assignment='$assignment', attendance='$attendance',
                classTest='$classTest', midTerm='$midTerm', finalExam='$finalExam'
            WHERE student_id='$student_id'";

    // কোয়েরি রান করা
    $result = mysqli_query($data, $sql);

    if ($result) {
        echo "ডাটা সফলভাবে আপডেট হয়েছে";
    } else {
        echo "ডাটা আপডেট করা সম্ভব হয়নি";
    }
}
$data->close();
?>




   <form action="result.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
	<!--Search & select option-->
	<table> 
		<tr>		
			<td style="padding-right:10px">
	<?php 
    include "connect.php";
    $student_id = $_GET['student_id'];

    $sql = "SELECT user.username, result.student_id 
            FROM user
            INNER JOIN result ON user.student_id = result.student_id
            WHERE result.student_id = '$student_id'";

    $result = mysqli_query($data, $sql);
?>

<select id="searchDropdown" class="form-control js-example-basic-single" name="student_id" style="width:150px;height:25px;margin-right:15px;font-family: 'Lato', sans-serif;" required>
    <?php while ($info = $result->fetch_assoc()) { ?>
        <option value='<?php echo "{$info['student_id']}"; ?>' selected>
            <?php echo "{$info['username']}"; ?> || <?php echo "{$info['student_id']}"; ?>
        </option>
    <?php } ?>
</select>

		
			</td>
			
			<td>			
	<select class="form-control" id="examtype" name="examtype"required>
			<option selected disabled >Exam Type</option>
			<option value='Spring'>Spring</option>
			<option value='Summer'>Summer</option>
			<option value='Fall'>Fall</option>
	</select>
			</td>
		</tr>
	</table>
	<table>
	<tr>
		<td>
		<div class="form-group" style="margin-right:5px;">
		<select class="form-control" id="semister" style="margin-top:19px;" name="semister" required>
			
				<option value='' selected disabled >Semister</option>
				<option value='1st Semister'>1st </option>
				<option value='2nd Semister'>2nd </option>
				<option value='3rd Semister'>3rd </option>		
				<option value='4th Semister'>4th</option>		
				<option value='6th Semister'>6th</option>		
				<option value='7th Semister'>7th</option>		
				<option value='8th Semister'>8th</option>		
		</select>
		</div>
		</td>
		<td>		
		<input class="form-control"  type="date" id="examDate" name="examDate" required>
		</td>
	</tr>
	<tr>
	<td style="padding-top:10px;">
	<!--Select Subject & Subject code-->
	<?php 
		include "connect.php";

		$sql = "SELECT subject_name, subject_code FROM subjectsdetails";
		$result = mysqli_query($data, $sql);
	?>	
	<select class="form-control" id="subject" name="subject" style="width:90%" onchange="updateSubjectCode()"required>
	<option selected disabled >Select Subject</option>
		<?php while($info = $result->fetch_assoc()) { ?>
		
			<option value='<?php echo "{$info['subject_name']}"; ?>'>
				<?php echo "{$info['subject_name']}"; ?>
			</option>
		<?php } ?>
	</select>
	</td>
	<td style="padding-top:10px;"> 
	
	<select class="form-control" id="subjectcode" name="subject_code">
	<option>Code</option>
		<?php $result->data_seek(0); // Reset the result set pointer to the beginning ?>
		<?php while($info = $result->fetch_assoc()) { ?>
			<option value='<?php echo "{$info['subject_code']}"; ?>'>
				<?php echo "{$info['subject_code']}"; ?>
			</option>
		<?php } $data->close();?>
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
	<!--/Select Subject & Subject code-->
	</td>
	</tr>
	</table>	
	<table>
		<tr>
			<td style="padding: 2px;">
					<div class="form-group">
						<label for="marks">Assignment</label>
						<input type="number" class="form-control" id="Assignment" name="assignment" placeholder="marks" required>
						<div class="text-danger" id="marksErrorAssign"></div>
					</div>
			</td>
			<td>
					<div class="form-group">
						<label for="marks">	Attendance	</label>
						<input type="number" class="form-control" id="Attendance" name="attendance" placeholder="marks" required>
						<div class="text-danger" id="marksErrorAtten"></div>
					</div>
			</td>
		</tr>
		<tr>
			<td style="padding: 2px;">
					<div class="form-group">
						<label for="marks">ClassTest</label>
						<input type="number" class="form-control" id="classTest" name="classTest" placeholder="marks" required>
						<div class="text-danger" id="marksErrorCT"></div>
					</div>
			</td>
			<td>
					<div class="form-group">
						<label for="marks">Mid Term</label>
						<input type="number" class="form-control" id="MidTerm" name="midTerm" placeholder="marks" required>
						<div class="text-danger" id="marksErrorMid"></div>
					</div>
			</td>
		</tr>	
			
		</table>		
				   <tr>
			
                    <div class="form-group">
						<label for="marks">Final Exam</label>
						<input type="number" class="form-control" id="FinalExam" name="finalExam" placeholder="marks" required>
						<div class="text-danger" id="marksErrorFinal"></div>
					</div>
			
			</tr>
				   

                    <button type="submit" class="btn btn-primary btn-block"name="add_record">Add Record</button>
                    <button type="button" class="btn btn-primary btn-block" onclick="reloadPage()">Reload</button>
					<script>
					  function reloadPage() {
						location.reload();
					  }
					</script>
					
 </form>					
		<script>
    function validateMarks(inputId, errorId, maxAllowed) {
        var input = document.getElementById(inputId);
        var error = document.getElementById(errorId);

        if (input.value > maxAllowed) {
            error.textContent = "Maximum marks:  " + maxAllowed;
            input.setCustomValidity("Invalid");
        } else {
            error.textContent = "";
            input.setCustomValidity("");
        }
    }

    document.getElementById("Assignment").addEventListener("change", function() {
        validateMarks("Assignment", "marksErrorAssign", 10);
    });

    document.getElementById("Attendance").addEventListener("change", function() {
        validateMarks("Attendance", "marksErrorAtten", 10);
    });

 document.getElementById("classTest").addEventListener("change", function() {
        validateMarks("classTest", "marksErrorCT", 10);
    });
 document.getElementById("MidTerm").addEventListener("change", function() {
        validateMarks("MidTerm", "marksErrorMid", 20);
    });
 document.getElementById("FinalExam").addEventListener("change", function() {
        validateMarks("FinalExam", "marksErrorFinal", 50);
    });
    // Add more event listeners for other fields as needed

</script>

            </div>
        </div>
	
	 </div>
 </div>

</div>

<!-- Include Select2 JS -->
<script src="js/select2.min.js"></script>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>


</body>
</html>
