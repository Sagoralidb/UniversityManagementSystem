<?php
// Start a session if not already started
session_start();// session managed

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("location: login.php");
exit;
?>
