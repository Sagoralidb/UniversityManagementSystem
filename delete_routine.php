<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$routine_id = $_GET['id'];
$sql = "DELETE FROM classroutine WHERE id='$routine_id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['message']="<h3 class='bg-warning'>Deleted Successfully !</h3>";
    header("location: view_routine.php");
} 

?>

