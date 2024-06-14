<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$post_id = $_GET['post_id'];
$sql = "DELETE FROM user_post WHERE post_id='$post_id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['message']="<h3 class='bg-warning'>Deleted Successfully !</h3>";
    header("location:allpost.php");
} 

?>

