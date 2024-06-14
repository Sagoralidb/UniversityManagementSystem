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
		  <title>Update Now</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include"cdn.php";?>
		  <!--admin sideber-->

	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>
 <?php 
	include "menu/adminmenu.php";
 ?>
 <!--Insert Subjec and subject code-->
<div class="container"><br>  
			    <!-- Subject Add msg -->
		  <?php if (isset($_SESSION['message'])): ?>
			<h2 style="color:white;"><?php echo $_SESSION['message']; ?></h2>
			<?php unset($_SESSION['message']); // Clear the message after displaying ?>
		<?php endif; ?>
			<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		?>

<div class="container">
  
	<?php

include "connect.php";

$id = $_GET['id'];

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id === null) {
    // Note: Ensure proper sanitation and validation of 'id' to prevent security issues.
    echo "Error: Missing 'id' parameter.";
    exit;
}

$sql = "SELECT * FROM subjectsdetails WHERE id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $query = "UPDATE subjectsdetails SET 
    subject_name='{$_POST['subject_name']}',
    subject_code='{$_POST['subject_code']}',
    sub_credit='{$_POST['sub_credit']}'	
    WHERE id='$id'";

    $result2 = mysqli_query($data, $query);

    if ($result2) {
        $_SESSION['message'] = "Data updated successfully.";
    } else {
        $_SESSION['message'] = "Update failed";
    }
}
?>

<h1 class="rounded-lg text-center shadow p-4 mb-4 bg-white">Add New Subject</h1>
<!-- Subject Add msg -->
<?php if (isset($_SESSION['message'])): ?>
    <h2 style="background: yellow;"><?php echo $_SESSION['message']; ?></h2>
    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
<?php endif; ?>

<form action="#" method="POST" style="border: 2px solid #fff; padding: 10px;" class="rounded-lg shadow-none p-4 mb-4 bg-light"onsubmit="return validateForm()">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Write Subject Name" name="subject_name"
            value="<?php echo isset($_POST['subject_name']) ? $_POST['subject_name'] : "{$info['subject_name']}"; ?>"
            required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Write Subject Code" name="subject_code"
            value="<?php echo isset($_POST['subject_code']) ? $_POST['subject_code'] : "{$info['subject_code']}"; ?>"
            required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="credit" placeholder="Subject Credit" name="sub_credit"
            value="<?php echo isset($_POST['sub_credit']) ? $_POST['sub_credit'] : "{$info['sub_credit']}"; ?>"
            required>
			<div class="text-danger" id="marksErrorCredit"></div>
    </div>
    <button type="submit" class="btn btn-primary" value="update" name="update">Update</button>
	<button class="btn btn-info"> <a href="add_subject.php" style="text-decoration:none;color:white">Go Back</a></button>
</form>

<?php
$data->close();
?>

		</div>

	</div>

<script>
    function validateMarks(inputId, errorId, maxAllowed) {
        var input = document.getElementById(inputId);
        var error = document.getElementById(errorId);

        if (input.value > maxAllowed) {
            error.textContent = "Maximum Credit:  " + maxAllowed;
            input.setCustomValidity("Invalid");
        } else {
            error.textContent = "";
            input.setCustomValidity("");
        }
    }

    document.getElementById("credit").addEventListener("change", function() {
        validateMarks("credit", "marksErrorCredit", 4);
    });
	</script>
</body>
</html>
