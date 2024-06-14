<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// সংযোগ তৈরি করুন
$conn = new mysqli($servername, $username, $password, $dbname);

// সংযোগ পরীক্ষা করুন
if ($conn->connect_error) {
    die("সংযোগ ব্যর্থ হয়েছে: " . $conn->connect_error);
}

session_start(); // সেশন ম্যানেজ করুন

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
} elseif ($_SESSION['usertype'] !== 'student') {
    header("location:login.php");
    exit();
}

$name = $_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $admissionDate = $row["time"];
        $currentDate = date("Y-m-d");
        $totalSemesters = findSemester($admissionDate, $currentDate);
        echo "আপনি " . $row["username"] . " নামের ব্যবহারকারী " . $totalSemesters . " সেমিস্টারে পড়ছেন।";
    }
} else {
    echo "আপনি " . $name . " নামের ব্যবহারকারী, কোন ডেটা পাওয়া যায়নি";
}

$conn->close();

function findSemester($admissionDate, $currentDate) {
    $admissionYear = date("Y", strtotime($admissionDate));
    $admissionMonth = date("m", strtotime($admissionDate));
    $currentYear = date("Y", strtotime($currentDate));
    $currentMonth = date("m", strtotime($currentDate));

    // Calculate the total semesters
    $totalSemesters = ($currentYear - $admissionYear) * 2;

    // Check if the current month falls in the first or second semester
    if ($currentMonth >= 1 && $currentMonth <= 6) {
        $totalSemesters += 1;
    } else {
        $totalSemesters += 2;
    }

    // Check if the admission month falls in the first or second semester
    if ($admissionMonth >= 1 && $admissionMonth <= 6) {
        $totalSemesters -= 1;
    } else {
        $totalSemesters -= 2;
    }

    // Ensure that at least 1 semester is counted
    $totalSemesters = max($totalSemesters, 1);

    return $totalSemesters;
}
?>
