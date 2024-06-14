<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$user_id = $_GET['id'];
$sql = "DELETE FROM user WHERE id='$user_id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['message']="<h3 class='bg-warning'>Deleted User Successfully !</h3>";
    header("location: all_user.php");
}
?>

