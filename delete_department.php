<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$id = $_GET['dpt_id'];
$sql = "DELETE FROM departments WHERE dpt_id='$id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['message']="<h3 class='bg-warning'>Deleted Successfully !</h3>";
    header("location:add_department.php");
}
?>

