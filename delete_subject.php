<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$id = $_GET['id'];
$sql = "DELETE FROM subjectsdetails WHERE id='$id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['message']="<h3 class='bg-warning'>Deleted Successfully !</h3>";
    header("location:add_subject.php");
}
?>

