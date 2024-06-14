<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$notice_id = $_GET['notice_id'];
$sql = "DELETE FROM notice WHERE notice_id='$notice_id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['message']="<h3 class='bg-warning'>Deleted Successfully !</h3>";
    header("location:create_notice.php");
} 

?>

