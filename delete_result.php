<!-- Session manage -->
<?php 
include "session.php";
include"connect.php";
include"cdn.php";
$id = $_GET['id'];
$sql = "DELETE FROM result WHERE id='$id'";
$result = mysqli_query($data, $sql);

if ($result) {
	$_SESSION['DeLmessage']="<h3 class='bg-warning'>Deleted result Successfully !</h3>";
    header("location: result.php");
}
?>

