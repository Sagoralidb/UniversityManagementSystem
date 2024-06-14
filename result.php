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
include 'connect.php';

if (isset($_POST["add_record"])) {
    $student_id = $_POST["student_id"];
    $examtype = $_POST["examtype"];
    $semister = $_POST["semister"];
    $subject = $_POST["subject"];
    $subject_code = $_POST["subject_code"];
    $examDate = $_POST["examDate"];
    $assignment = $_POST["assignment"];
    $attendance = $_POST["attendance"];
    $classTest = $_POST["classTest"];
    $midTerm = $_POST["midTerm"];
    $finalExam = $_POST["finalExam"];

    $sql_check = "SELECT * FROM result WHERE student_id = '$student_id' AND subject = '$subject' AND subject_code = '$subject_code'";
    $check_result = mysqli_query($data, $sql_check);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['message'] = "<p class='text-danger'>Record for Student ID: $student_id, Subject: $subject, Subject Code: $subject_code is already exists!</p>";
    } else {
        $sql = "INSERT INTO result (student_id, examtype, semister, subject, subject_code, examDate, 
        assignment, attendance, classTest, midTerm, finalExam) VALUES 
        ('$student_id', '$examtype', '$semister', '$subject', '$subject_code', '$examDate', '$assignment', '$attendance', '$classTest', '$midTerm', '$finalExam')";

        if (mysqli_query($data, $sql)) {
            $_SESSION['message'] = "<p class='text-success'>Student ID: $student_id Result Added successfully !</p>";
            
        } else {
            $_SESSION['message'] = "<p class='text-danger'>Result Dose not added !</p>: " . mysqli_error($data);
        }
    }header('location:result.php');
            ob_end_flush(); // Flush the output buffer
}

mysqli_close($data);
?>



   <form action="result.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
	<!--Search & select option-->
	<table> 
		<tr>		
			<td style="padding-right:10px">
	<?php 
		include"connect.php";
		$sql="SELECT username,student_id FROM user WHERE usertype='student'";
		$result=mysqli_query($data,$sql);
	?>
		<select id="searchDropdown" class="form-control js-example-basic-single " name="student_id" style="width:150px;height:25px;margin-right:15px;font-family: 'Lato', sans-serif;"required>
				<?php while($info=$result->fetch_assoc() ) {?>	
				<option value='<?php echo"{$info['student_id']}" ?>'>
				<?php echo"{$info['username']}"; ?>||<?php echo"{$info['student_id']}"; ?>
				</option>
		<?php }?>	
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
<br> 
 	<div class="form-container bg-info">
		<h2 class="text-center mb-4">All Results</h2>
		<?php if (isset($_SESSION['DeLmessage'])): ?>
    <?php echo $_SESSION['DeLmessage']; ?>
    <?php unset($_SESSION['DeLmessage']); // Clear the message after displaying ?>
	<?php endif; ?>	
		  <input class="form-control" id="myInput" type="text" placeholder="Search..">
<table class="table table-bordered table-sm">
    <?php include "connect.php"; ?>
    <thead>
        <tr class="text-center table-primary">
            <th>Student ID</th>
            <th>Username</th>
            <th>Subject<br>Name</th>
            <th>Subject Code</th>
            <th>Semester</th>
            <th>Exam Type</th>
            <th>Exam Date</th>
            <th>Assignment</th>
            <th>Attendance</th>
            <th>Class Test</th>
            <th>Mid Term</th>
            <th>Final</th>
            <th>Total Mark</th>
            <th>Avg Mark</th>
            <th>Grade Point</th>            
            <th>Letter Grade</th>
            <th>Subject Credit</th>
            <th>Earn Credit</th>
            
          
        </tr>
    </thead>
    <tbody id="myTable" class="table-warning">
        <?php
     $sql = "SELECT result.*, user.username, subjectsdetails.sub_credit
        FROM result
        INNER JOIN user ON result.student_id = user.student_id
        INNER JOIN subjectsdetails ON result.subject = subjectsdetails.subject_name
        WHERE user.usertype='student'
        ORDER BY result.id DESC";


        $result = mysqli_query($data, $sql);
        ?>
        <?php while ($info = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $info['student_id']; ?></td>
                <td><?php echo $info['username']; ?></td>
                <td><?php echo $info['subject']; ?></td>
                <td><?php echo $info['subject_code']; ?></td>
                <td><?php echo $info['semister']; ?></td>
                <td><?php echo $info['examtype']; ?></td>
                <td>
				<?php 
					$desiredDateFormate='Y-m-d';
					$timestamp=strtotime('2023-09-30');
					echo date($desiredDateFormate,$timestamp);			
				?>
				</td>
                <td><?php echo $info['assignment']; ?></td>
                <td><?php echo $info['attendance']; ?></td>
                <td><?php echo $info['classTest']; ?></td>
                <td><?php echo $info['midTerm']; ?></td>
                <td><?php echo $info['finalExam']; ?></td>
                <td>
				<?php 
				$totalMark=$info['assignment']+$info['attendance']+$info['classTest']+$info['midTerm']+$info['finalExam'];	
					echo $totalMark;
					?>
				</td>
                <td>
					<?php 
					$AvgMark=($totalMark/5);//উপরের $totalMark এর যোগফলকে ৫টি আলাদা Marking পদ্ধতী দিয়ে ভাগ
					echo $AvgMark; ?>
				</td>
                <td><?php 
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
						echo"<h6 class='text-danger' style='rotate:90deg; margin-top:27px;'>Failed</h6>";						
					}
		
				?>
				</td>
				 <td>
	<?php echo $info['sub_credit']; ?>
				 
				 </td>
				 <td>
				   <?php
    if ($totalMark < 33) {
        echo "0";
    } else {
            echo $info['sub_credit'];
        } 
    ?>
				 </td>
                <td class="text-center">	
			
				<?php 
					echo "<a href='update_result.php?student_id={$info['id']}' class='btn btn-info'>Update</a>";
 
				?>
				 
				</td>
                <td>
				
				</td>
                <td>			
		<?php include"tools/delete_result_btn.php"; ?>
				
				</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
		</div>
		<br><br>
</div>

<!-- Include Select2 JS -->
<script src="js/select2.min.js"></script>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<!--  Js for delete button popup -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
