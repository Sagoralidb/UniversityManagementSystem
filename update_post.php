<?php
// Start session and output buffering
session_start();
ob_start();

// Redirect if the user is not logged in as a teacher or admin
if (!isset($_SESSION['usertype']) || ($_SESSION['usertype'] !== "teacher" && $_SESSION['usertype'] !== "admin")) {
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
                    include "connect.php";
                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM user_post WHERE username='$username' ORDER BY post_time DESC";
                    $result = mysqli_query($data, $sql);
                    echo $username;
                    ?>
                </sup></h1>

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
$id = isset($_GET['post_id']) ? $_GET['post_id'] : null;

if ($id == null) {
    echo "Error: Missing 'id' parameter.";
    exit;
}

$sql = "SELECT * FROM user_post WHERE post_id='$id'";
$result = mysqli_query($data, $sql);
$info = $result->fetch_assoc();
$updateImage = isset($_POST['update_image']) ? $_POST['update_image'] : false;

if (isset($_POST['update']) && $updateImage) {
    // Handle feature image upload
    if (isset($_FILES['feature_image']) && $_FILES['feature_image']['size'] > 0) {
        // Process the uploaded image
        $file_name = $_FILES['feature_image']['name'];
        $file_tmp = $_FILES['feature_image']['tmp_name'];
        $file_type = $_FILES['feature_image']['type'];

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
                // Delete the old feature image if it exists
                if (!empty($info['feature_image'])) {
                    unlink($upload_directory . $info['feature_image']);
                }

                // Update user data with the new image
                $query = "UPDATE user_post SET 
                    post_title='{$_POST['post_title']}',
                    post_content='{$_POST['post_content']}',
                    feature_image='$unique_file_name'
                    WHERE post_id='$id'";

                $result2 = mysqli_query($data, $query);

                if ($result2) {
                    $_SESSION['message'] = "Data updated successfully.";
                    echo "<h3 class='text-primary'>Data updated successfully!</h3>";
                } else {
                    $_SESSION['message'] = "Update failed: " . mysqli_error($data);
                    echo "<h3 class='text-warning'>Update failed: " . mysqli_error($data) . "</h3>";
                }
            } else {
                echo "<h3 class='text-warning'>Image upload failed!</h3>";
            }
        } else {
            echo "<h3 class='text-danger'>Invalid file type. Please upload a JPEG, JPG, PNG, or GIF image.</h3>";
        }
    } else {
        header('location:update_post.php?post_id=' . $id);
        ob_end_flush(); // Flush the output buffer
    }
}
?>

                <form id="postForm" action="update_post.php?post_id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    <!-- Your form fields go here -->

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Title</span>
                        </div>
                        <input type="text" name="post_title" class="form-control" placeholder="Write the post title" value="<?php echo isset($_POST['post_title']) ? $_POST['post_title'] : "{$info['post_title']}"; ?>" required>
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="feature_image" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <script>
                            // Add the following code if you want the name of the file to appear on select
                            $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });
                        </script>
                    </div>

                    <div class="form-group">
                        <label for="comment" style="color:white;">Description:</label>
                        <textarea class="form-control" rows="5" id="message" name="post_content" required><?php
							echo isset($_POST['post_content']) ? $_POST['post_content'] : "{$info['post_content']}";
						?></textarea>
	

                    </div>
						<input type="hidden" name="update_image" value="true">
                    <button type="submit" class="btn btn-block btn-primary" name="update">Update Now</button>
                </form>
            </table>
        </section>
    </div>
</body>
</html>
