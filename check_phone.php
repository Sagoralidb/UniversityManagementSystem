<?php
include "connect.php"; // ডাটাবেস সংযোগ স্থাপন করুন
// ফোন নম্বর চেক করার কোড শুরু
$phone = $_POST['phone']; // ফর্ম থেকে নেওয়া ফোন নম্বর
$sql = "SELECT * FROM user WHERE phone = '$phone'";
$result = mysqli_query($data, $sql);

if (mysqli_num_rows($result) > 0) {
    // ডুপ্লিকেট ফোন পাওয়া গিয়েছে
        $response = array('status' => 'error', 'message' => 'This Phone number is already exist, use another phone');
        echo json_encode($response);
}

?>
