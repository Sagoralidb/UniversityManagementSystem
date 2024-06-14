<?php 

session_start();

if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>


<?php
// Retrieve user ID and usertype from the query parameters
$user_id = $_GET['user_id'];
$usertype = $_GET['usertype'];

// Include the necessary sections based on the usertype
if ($usertype === 'student') {
    include 'update_student.php'; // Include the student profile section
} elseif ($usertype === 'teacher') {
    include 'update_teacher.php'; // Include the teacher profile section
} else {
    echo "Something wrong !";
}
?>
