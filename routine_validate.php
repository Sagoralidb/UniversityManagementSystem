<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $start_time = $_POST["start_time"];
  $end_time = $_POST["end_time"];
  $batch_no = $_POST["batch_no"];
  $days = $_POST["days"];

  function isClassAvailable($start_time, $end_time, $batch_no, $days) {
    global $data;

    // সিকুয়েল স্টেটমেন্ট তৈরি
    $sql = "SELECT * FROM classroutine WHERE start_time <= '$end_time' AND end_time >= '$start_time' AND batch_no = '$batch_no' AND days = '$days'";
    $result = $data->query($sql);

    // রো গুলি চেক করা
    if ($result->num_rows > 0) {
      return true; // ক্লাস আছে
    } else {
      return false; // ক্লাস নেই
    }
  }

  if (isClassAvailable($start_time, $end_time, $batch_no, $days)) {
    echo "ক্লাস আছে";
  } else {
    echo "ক্লাস নেই";
  }
}
?>
