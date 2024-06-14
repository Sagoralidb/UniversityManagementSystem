<?php 

session_start();

if (!isset($_SESSION['usertype'])) {
    header("location: login.php");
    exit;
}

if ($_SESSION['usertype'] !== "teacher" && $_SESSION['usertype'] !== "admin"&& $_SESSION['usertype'] !== "Student") {
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
    include 'profile/student_Profile.php'; // Include the student profile section
} elseif ($usertype === 'teacher') {
    include 'profile/teacher_Profile.php'; // Include the teacher profile section
} else {
    // Handle any other usertype (optional)
}
?>
