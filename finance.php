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
		  <title>Finance</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="css/select2.min.css" rel="stylesheet">
		 <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
<?php include"cdn.php"; ?> 	
	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>
<div class="row">
	
	 <?php 
		include "menu/adminmenu.php";
	 ?>
	
<div class="col-md-10"style="margin-left:15%">

 <div class="container">
		 <h1 style="color:white;">Finance & Accouting</h1>
					  <?php
					error_reporting(E_ALL);
					ini_set('display_errors', 1);
					?>
					
				<?php if (isset($_SESSION['message'])): ?>
				<h2><?php echo $_SESSION['message']; ?></h2>
				<?php unset($_SESSION['message']); // Clear the message after displaying ?>
				<?php endif; ?>
<div class="row">
		  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Add Payment</button>
<?php 
include "connect.php";

if(isset($_POST['submit']))
{
    $student_id = $_POST['student_id'];
    $semister = $_POST['semister'];
	$pay_date = $_POST['pay_date'];
    $payment_method = $_POST['payment_mathodes'];
    $fees = $_POST['fees'];
    $tranjection_id = $_POST['tranjection_id'];
    $note = $_POST['note'];


                /* File Upload */
 if (isset($_FILES['voucher'])) 
 {
                    $file_name = $_FILES['voucher']['name'];
                    $file_tmp = $_FILES['voucher']['tmp_name'];
                    $file_type = $_FILES['voucher']['type'];
                    $file_size = $_FILES['voucher']['size'];

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
    

    // Insert data into finance table
   $sql = "INSERT INTO finance (student_id, semister, pay_date, mathods, fees, tranjection_id, screenshort, note)
        VALUES ('$student_id', '$semister', '$pay_date', '$payment_method', '$fees', '$tranjection_id', '$unique_file_name', '$note')";

    $result = mysqli_query($data, $sql);
	
if (!isset($_FILES['voucher']) || !in_array($file_extension, $allowed_extensions)) {
			$_SESSION['message'] = "Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.";
							}
    if ($result) {
        $_SESSION['message'] = "<h3 class='text-warning'>Student id:$student_id Fees:$fees /- Data inserted successfully<h3>";
    } else {
        $_SESSION['message'] = "Data insertion failed !";
    }

    header('location:finance.php');
    ob_end_flush(); // Flush the output buffer
}

				}
	}
}
?>

					
		<form action="finance.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
			<div class="collapse col-sm-12"id="demo"><br>
			<table class="card table table-bordered shadow-sm  border-0">
				<tr class="bg-info text-light">
					<th>Student ID</th>
					<th>Semester</th>
					<th>Payment Date</th>
					<th>Payment Mathods</th>
				</tr>
				<tr class="bg-warning">
					<th style="padding:10px"><br>
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
					</th>
					<th>
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
				
		</th>
					<th><br>
					<input type="date" id="birthday" class="date" name="pay_date">
					</th>
					<th>
				
				<div class="form-group" style="margin-right:5px;">
			<select class="form-control" id="semister" style="margin-top:19px;" name="payment_mathodes" required>
					<option value='' selected disabled >Methods</option>
					<option value='1st Semister'>BKash </option>
					<option value='2nd Semister'>Nagod </option>
					<option value='3rd Semister'>ROKET</option>		
					<option value='4th Semister'>Cash</option>		
					<option value='6th Semister'>Check</option>								
			</select>
			</div>
			</th>
				</tr>
				<tr class="bg-info text-light">
					<th>Fees</th>
					<th>TransactionID</th>
					<th>Voucher</th>
					<th>Notes</th>
				</tr>
				<tr class="bg-warning">
					<th><br>
					<input type="number" class="form-control" name="fees" placeholder="Amount" id="amount" min="0" step="1">
					</th>
					<th><br>
					<input type="text" class="form-control" name="tranjection_id" placeholder="Tranjection id" id="tranjection">

					</th>
					<th><br>
					<input type="file" id="myFile" name="voucher">
					<script>
						// Add the following code if you want the name of the file appear on select. We can see the name of file we selected.
						$(".custom-file-input").on("change", function() {
						  var fileName = $(this).val().split("\\").pop();
						  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
						});
						</script>
					</th>
					<th>
					<textarea rows="2" cols="10">
					</textarea>
					
					</th>
				</tr>
				<tr class="bg-warning">
					<td colspan="2"></td>		
					<td>
					<button type="reset"class="btn btn-light form-control">Reset</button>
					</td>
					<td>
					<button type="submit" value="submit"name="submit" class="btn btn-light form-control">Submit</button>
					</td>
				</tr>

			</table>
		 </form>
	</div>
			
			
		 </div>
 </div>
 <!-- এখানে এখন আমরা সকল তথ্য  দেখাব-->
	
</div>
<!-- Include Select2 JS -->
<script src="js/select2.min.js"></script>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>


</div>
</body>
</html>
