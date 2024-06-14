<?php 
session_start();
ob_start(); //
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
 
<?php include"cdn.php";?>



	</head>
<body>
<?php  include "menu/panel_nav_top.php";?>
 <?php  include "menu/adminmenu.php"; ?>


<div class="container">
	<div class="row" style="widht:100%;margin-left:5%;margin-top:5%;">
	<div class="col-sm-6">
	
<?php 

// Check if the form is submitted
if(isset($_POST['submit'])) {
    
    // Connect to the database (replace these variables with your actual database credentials)
include"connect.php";

    // Check if a file is selected
    if(isset($_FILES['file'])) {
		// Get the current file name from the database for deletion
    $sql_select = "SELECT file FROM logo ORDER BY id DESC LIMIT 1";
    $result_select = mysqli_query($data, $sql_select);

    if ($result_select && mysqli_num_rows($result_select) > 0) {
        $row = mysqli_fetch_assoc($result_select);
        $old_file_name = $row['file'];

        // Define the directory where files are stored
        $upload_directory = "uploads/";

        // Delete the old file
        unlink($upload_directory . $old_file_name);
    
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];

        // Define the directory where you want to save the uploaded files
        $upload_directory = "uploads/"; // Change this to your desired directory

        // Create a unique file name to avoid overwriting existing files
        $unique_file_name = time() . '_' . $file_name;

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, $upload_directory . $unique_file_name)) {
            // File upload was successful, you can save the file name in the database or perform other operations here
            $sql = "INSERT INTO logo (file) VALUES ('$unique_file_name')";
            
            $result = mysqli_query($data, $sql);

            if ($result) {
                $_SESSION['message'] = "Data uploaded Successfully!";
            } else {
                $_SESSION['message'] = "Upload Failed!";
            }
        } else {
            $_SESSION['message'] = "File upload failed.";
        }
    } else {
        $_SESSION['message'] = "No file selected.";
    }

    // Close the database connection
    mysqli_close($data);

    // Redirect to the same page after processing the form
    header('location:setting.php');
	ob_end_flush();
    exit();
}}
?>
    <form action="" method="post" enctype="multipart/form-data">
		<!--Image-->
		<?php if (isset($_SESSION['message'])): ?>
    <h2 class="text-white"><?php echo $_SESSION['message']; ?></h2>
    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
	<?php endif; ?>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td class="text-white"><h5>Website Logo</h5></td>
                    <td>
                        <div>
                            <div class="mb-4 d-flex justify-content-center">
                                <img id="selectedImage" src="images/dm logo.png" alt="example placeholder" style="width: 100px;" />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded">
                                    <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                    <input type="file" class="form-control d-none" name="file" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                </div>
                            </div>	
                        </div>
                    </td>
						<td>
							<input type="submit" class="btn btn-info" value="Upload" name="submit">							
						</td>
					</tr>
				</tbody>
			</table>
			
		</form>
		
	</div>
	<div class="col-sm-6">
<?php
include "connect.php";

$newtitle = isset($_POST['newtitle']) ? htmlspecialchars($_POST['newtitle']) : '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Sanitize user input to prevent SQL injection
    $newTitle = mysqli_real_escape_string($data, $_POST["newtitle"]);

    // Check if there is an existing title
    $checkExistingQuery = "SELECT id FROM title";
    $resultCheck = mysqli_query($data, $checkExistingQuery);

    if ($resultCheck->num_rows > 0) {
        // If there is an existing title, delete it
        $deleteOldTitlesQuery = "DELETE FROM title";
        $resultDelete = mysqli_query($data, $deleteOldTitlesQuery);

        if (!$resultDelete) {
            $_SESSION['messagetitle'] = "Error deleting old titles: " . mysqli_error($data);
        }
    }

    // Insert new title into the database
    $insertQuery = "INSERT INTO title (newtitle) VALUES ('$newTitle')";
    $result = mysqli_query($data, $insertQuery);

    if ($result) {
        $_SESSION['messagetitle'] = "New title added successfully!";
    } else {
        $_SESSION['messagetitle'] = "Error adding new title: " . mysqli_error($data);
    }

    // Close the database connection
    mysqli_close($data);
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <!-- Image -->
    <?php if (isset($_SESSION['messagetitle'])): ?>
        <h2 class="text-warning"><?php echo $_SESSION['messagetitle']; ?></h2>
        <?php unset($_SESSION['messagetitle']); // Clear the message after displaying ?>
    <?php endif; ?>

    <table class="table table-striped">
        <tbody>
            <tr>
                <td class="text-white"><h5>Website title</h5></td>
                <td>
                    <div>
                        <div class="d-flex justify-content-center">
                            <!-- Display the current title in the input field -->
                            <input type="text" class="form-control" name="newtitle" id="title" placeholder="Name of your University" value="<?php echo $newtitle; ?>" required>
                        </div>	
                    </div>
                </td>
                <td>
                    <input type="submit" class="btn btn-info" value="submit" name="submit">
                </td>
            </tr>
        </tbody>
    </table>
</form>


	</div>
	</div>
</div>


<script>

function displaySelectedImage(event, elementId) {
    const selectedImage = document.getElementById(elementId);
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
</script>

</body>
</html>
