<?php
include "connect.php"; // ডাটাবেস সংযোগ স্থাপন করুন
$student_id = $_POST['student_id']; // ইউজারনেম ফর্ম থেকে নেওয়া হবে

// ডুপ্লিকেট চেক করুন
$sql = "SELECT COUNT(*) as count FROM user WHERE student_id = '$student_id'";
$result = mysqli_query($data, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    if ($count > 0) {
        // ডুপ্লিকেট স্টুডেন্ট আইডি পাওয়া গিয়েছে
        $response = array('status' => 'error', 'message' => 'The student id is already exist, use another');
        echo json_encode($response);
    } else {
        //  যোগ করা যাবে
        $response = array('status' => 'success', 'message' => 'This student id is available');
        echo json_encode($response);
    }
} else {
    // সার্ভারে কোনও সমস্যা হয়েছে
    $response = array('status' => 'error', 'message' => 'Server error. Please try again later.');
    echo json_encode($response);
}
?>
