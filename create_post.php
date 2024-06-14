<?php 

session_start();
ob_start();
if (!isset($_SESSION['usertype'])) {
    header("location: login.php");
    exit;
}

if ($_SESSION['usertype'] !== "teacher" && $_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="author" content="w3techbd" />
    <title>Create New post</title>
	
    <?php include "cdn.php";?>


</head>
<body>
    <?php include "menu/panel_nav_top.php";?>
    <?php include "menu/post_menu.php";?>

    <div style="margin:10px 50px 100px 200px; padding: 10%;">
        <section class="bg-dark" style="border:5px solid #fff;padding:15px;box-shadow: 10px 10px 50px 12px lightblue;">
            <table class="table-dark">
                <h1 style="color:white;">Create New post<sup class="text-success">
				
				<?php
        include"connect.php";
		$username = $_SESSION['username'];
		$sql="select*from user_post WHERE username='$username' ORDER BY  post_time DESC";
		$result=mysqli_query($data,$sql);
				echo $username; ?>
				</sup>
				</h1>
				 <?php
					error_reporting(E_ALL);
					ini_set('display_errors', 1);
					?>

                <?php if (isset($_SESSION['message'])): ?>
                    <h2 class="text-success"><?php echo $_SESSION['message']; ?></h2>
                    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
                <?php endif; ?>
<?php
        include "connect.php";

        if (isset($_POST['post_now'])) {
			
            $username = $_SESSION['username'];//get the username for another table
            $query = "SELECT * FROM user WHERE username='$username'";
            $post_title = $_POST['post_title'];
            $post_content = $_POST['post_content'];

            $file_name = $_FILES['feature_image']['name'];
            $file_tmp = $_FILES['feature_image']['tmp_name'];
            $file_type = $_FILES['feature_image']['type'];
            $file_size = $_FILES['feature_image']['size'];

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
                    $sql = "INSERT INTO user_post (username, post_title, post_content, feature_image) VALUES ('$username', '$post_title', '$post_content', '$unique_file_name')";
                    $result = mysqli_query($data, $sql);

                    if ($result) {
                        $_SESSION['message'] = "Data uploaded Successfully!";
                    } else {
                        $_SESSION['message'] = "Upload Failed!";
                    }             
                } else {
                    $_SESSION['message'] = "Failed to move the uploaded file.";
                }
            } else {
                $_SESSION['message'] = "Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.";
            }
			header('location:create_post.php');
        }
		
        ?>
               
				<form id="postForm" action="create_post.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Title</span>
                        </div>
                        <input type="text" name="post_title" class="form-control" placeholder="Write the post title" required>
						
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="feature_image" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });
                        </script>
                    </div>
            
                    <div class="form-group">
                        <label for="comment" style="color:white;">Description:</label>
                        <textarea class="form-control" rows="5" id="message" name="post_content" required></textarea>
						
                    </div> 
					
					<button type="submit" class="btn btn-block btn-primary" name="post_now" onclick="createPost()">Post Now</button>
					<script>
						function createPost() {
							// Additional client-side validation or actions can be added here
							
							// Submit the form
							document.getElementById('postForm').submit();
						}
					</script>


                </form>
            </table>
        </section>
    </div>
</body>
</html>
<?php
ob_end_flush();
?>