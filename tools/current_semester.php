<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// এখান থেকে  ছাত্রছাত্রী কোন সেমিস্টারে পড়ছে তা খুঁজে বের করা কোড

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    
    // Assuming you have a 'user' table with appropriate column names
    $sql = "SELECT time, total_semester FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $admissionDate = $row['time'];
            $admissionYear = date("Y", strtotime($admissionDate));
            $admissionMonth = date("m", strtotime($admissionDate));
            $currentYear = date("Y");
            $currentMonth = date("m");
            $courseDuration = $row['total_semester'] * 12;

			function findCurrentSemester($admissionYear, $admissionMonth, $currentYear, $currentMonth, $courseDuration) {
				// Calculate the total number of months between admission and current date
				$totalMonths = (($currentYear - $admissionYear) * 12) + $currentMonth - $admissionMonth;

				// Calculate the current semester
				if ($totalMonths < 6) {
					return '1st'; // Starting the first semester
				} elseif ($totalMonths > 6 && $totalMonths <= 12) {
					return '2nd'; // Second semester
				} elseif ($totalMonths > 12 && $totalMonths <= 18) {
					return '3rd'; // Third semester
				} elseif ($totalMonths > 18 && $totalMonths <= 24) {
					return '4th'; // Fourth semester
				} elseif ($totalMonths > 24 && $totalMonths <= 30) {
					return '5th'; // Fifth semester
				} elseif ($totalMonths > 30 && $totalMonths <= 36) {
					if ($courseDuration == 36) {
						return "Your 3 years course is completed.";
					} else {
						return '6th';
					}
				} elseif ($totalMonths > 36 && $totalMonths <= 42) {
					return '7th'; // Seventh semester
				}

				return '8th'; // Completed the course
			}
            $currentSemester = findCurrentSemester($admissionYear, $admissionMonth, $currentYear, $currentMonth, $courseDuration);
            echo " $currentSemester";
        }
    } else {
        echo "No records found";
    }
} else {
    header("login.php");
}

$conn->close();

?>