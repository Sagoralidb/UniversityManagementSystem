<?php
include "connect.php"; // ডাটাবেস সংযোগ স্থাপন করুন
$username = $_POST['username']; // ইউজারনেম ফর্ম থেকে নেওয়া হবে

// ডুপ্লিকেট চেক করুন
$sql = "SELECT COUNT(*) as count FROM user WHERE username = '$username'";
$result = mysqli_query($data, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    if ($count > 0) {
        // ডুপ্লিকেট ইউজারনেম পাওয়া গিয়েছে
        $response = array('status' => 'error', 'message' => 'The username is already exist, use another username');
        echo json_encode($response);
    } else {
        // ইউজারনেম যোগ করা যাবে
        $response = array('status' => 'success', 'message' => 'Username is available');
        echo json_encode($response);
    }
} else {
    // সার্ভারে কোনও সমস্যা হয়েছে
    $response = array('status' => 'error', 'message' => 'Server error. Please try again later.');
    echo json_encode($response);
}
?>
