<?php 
session_start();

if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Admin Dashbord</title>  
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  

<?php include"cdn.php";?>

		  <!--admin sideber-->
<style>	
 
/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
/* infinite-rotation */
    @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .infinite-rotation {
            width: 50px; /* আপনির ইমেজের আকার অনুযায়ী পরিবর্তন করুন */
            height: 50px; /* আপনির ইমেজের আকার অনুযায়ী পরিবর্তন করুন */
            margin: 0 auto;
            display: block;
            position: relative;
            animation: rotate 5s linear infinite;
			margin-top: -46px;
        }
/* Responsive styles for top menu */
        @media screen and (max-width: 600px) {
            .navbar-nav.ml-auto {
                margin-top: 10px; /* Adjust as needed */
            }

            #liveClock {
                margin-top: 10px; /* Adjust as needed */
            }
        }
</style>

	</head>
<body>


 <!-- Top Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <!-- Brand/logo -->
            <!-- Toggler button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Add your top menu items here -->
                </ul>
                <div id="liveClock" class="text-light"></div>
                <button class="btn btn-info ml-3"> <a class="btn" href="logout.php">Logout</a></button>
            </div>
        </div>
    </nav>

	 <script>
        function updateClock() {
            // Create a new Date object
            var now = new Date();

            // Get the current time
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Format hours, minutes, and seconds with leading zeros if needed
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            // Get the current date
            var year = now.getFullYear();
            var month = now.getMonth() + 1; // Month is zero-based
            var day = now.getDate();

            // Format date components with leading zeros if needed
            month = month < 10 ? '0' + month : month;
            day = day < 10 ? '0' + day : day;

            // Display the live clock and date in the "liveClock" element
            document.getElementById('liveClock').innerHTML = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Call the updateClock function initially
        updateClock();
    </script>

<!-- Sidebar -->
<div class="container">
   <div class="row">
            <div class="col-md-2">
							<div class="sidebar">
								<a class="navbar-brand" href="adminhome.php">
								<img src="images/566331.png" alt="logo" style="width:40px;">
								<br><br>
							
							</a>	
							<div class="navbar1 ropright">
							<div class="dropdown1">
							  <button class="dropbtn1 dropdown-toggle" data-toggle="dropdown">POST</button>
								  <div class="dropdown-content">
									<a class="dropdown-item" href="create_post.php">New Post</a>
									  <a class="dropdown-item" href="allpost.php">All Post</a>
									  
								  </div>
							</div> 
						</div>								
								<a href="studentBatch.php"><i class=""></i>ALL Batches </a>	 
								<div class="navbar1 ropright">
							<div class="dropdown1">
							  <button class="dropbtn1 dropdown-toggle" data-toggle="dropdown">Notice</button>
								  <div class="dropdown-content">	
									  <a class="dropdown-item" href="create_notice.php">New Notice</a>
									  <a class="dropdown-item" href="allnotice_for_admin.php">All Notice</a>
								  </div>
							</div> 
						</div>
						<div class="navbar1 ropright">
							<div class="dropdown1">
							  <button class="dropbtn1 dropdown-toggle" data-toggle="dropdown">Routine</button>
								  <div class="dropdown-content">
									<a class="dropdown-item" href="view_routine.php">View</a>
									  <a class="dropdown-item" href="create_routine.php">Create</a>
									  <a class="dropdown-item" href="add_subject.php">Add Sub</a>
								  </div>
							</div> 
						</div>
								
								<a  href="add_student.php"><i class=""></i>Add Studnet</a>
								<a href="all_student.php"><i class="r"></i> All Studnet</a>
								<a href="add_teacher.php"><i class=""></i>Add Teacher</a>
								<a href="all_teacher.php"><i class=""></i> All Teacher</a>
								<a href="add_department.php"><i class=""></i>Cousers</a>				
								
						<div class="navbar1 ropright">
							<div class="dropdown1">
							  <button class="dropbtn1 dropdown-toggle" data-toggle="dropdown">Subject</button>
								  <div class="dropdown-content">
									<a class="dropdown-item" href="add_subject.php">New Subject</a>
									  <a class="dropdown-item" href="subject.php">All Subject</a>
								  </div>
							</div> 
						</div>						
								<a href="result.php"><i class=""></i>Result</a>	
								<a href="all_user.php"><i class=""></i>All USER</a>
								<a href="finance.php"><i class=""></i>Finance</a>
								<a href="setting.php"></i> Setting</a>
								<a href="application.php"><i class=""></i>Contact</a>								
						</div>
         </div>

            <!-- Main Content -->
 <div class="col-md-10">
		  <br>
		  <br> 	
		<div class="row" style="margin: 0 -91px;">
							
							<div class="col-md-3">
								<div class="card mb-3">
									<img src="fonts/users.svg" height="30px" class="card-img-top" alt="Total User">
									<div class="card-body">
										<p class="card-text">
											<?php 
											include"connect.php";
											$sql = "SELECT COUNT(*) as username FROM user";
											$result = $data->query($sql);
											if ($result->num_rows > 0) {
												// ডেটা পাওয়া হয়েছে
												$row = $result->fetch_assoc();
												echo "Total User <h4 id='tuser'> " . $row["username"].'</h4>';
											} else {
												echo "কোন ব্যবহারকারী পাওয়া যায়নি";
											}
											?>
						<img src='images/35656546546d-2.png' alt='Rotating Image' class='infinite-rotation'>					
											</p> 
										</div>
									  </div>
									</div>
									
							<div class="col-md-3">
								<div class="card mb-3">
									<img src="fonts/users.svg" height="30px" class="card-img-top" alt="Total User">
									<div class="card-body">
										<p class="card-text">	
										  <?php 
											include"connect.php";
											$sql = "SELECT COUNT(*) as username FROM user WHERE usertype='teacher'";
											$result = $data->query($sql);
											if ($result->num_rows > 0) {
												// ডেটা পাওয়া হয়েছে
												$row = $result->fetch_assoc();
												echo "Total Teacher <h4 id='tuser'> ". $row["username"].'</h4>';
											} else {
												echo "কোন ব্যবহারকারী পাওয়া যায়নি";
											}
											?>
											<img src='images/35656546546d-2.png' alt='Rotating Image' class='infinite-rotation'>
										  </p>
										  
										</div>
									  </div>
									 </div>
									  
							<div class="col-md-3">
								<div class="card mb-3">
									<img src="fonts/users.svg" height="30px" class="card-img-top" alt="Total User">
									<div class="card-body">
										<p class="card-text">		
										  <?php 
											include"connect.php";

											$sql = "SELECT COUNT(*) as username FROM user WHERE usertype='Student'";
											$result = $data->query($sql);

											if ($result->num_rows > 0) {
												// ডেটা পাওয়া হয়েছে
												$row = $result->fetch_assoc();
												echo "Total Student <h4 id='tuser'> " . $row["username"].'</h4>';
											} else {
												echo "কোন ব্যবহারকারী পাওয়া যায়নি";
											}
											?>
											<img src='images/35656546546d-2.png' alt='Rotating Image' class='infinite-rotation'>
										  </p>
										   
										</div>
									  </div>
									</div>
									
						<div class="col-md-3">
							<div class="card mb-3">
									<img src="fonts/users.svg" height="30px" class="card-img-top" alt="Total User">
								<div class="card-body">
										<p class="card-text">		
							<?php 
								include "connect.php";
								$currentYear = date("Y");
								//বর্তমান বছরে কত জন নতুন ছাত্র/ছাত্রী ভর্তী হয়েছে সেটি খুঁজে দেখার প্রকিৃয়া 
								$sql = "SELECT COUNT(*) as username FROM user WHERE usertype='Student' AND YEAR(time) = $currentYear";
								$result = $data->query($sql);

								if ($result->num_rows > 0) {
									// ডেটা পাওয়া হয়েছে
									$row = $result->fetch_assoc();
									echo "New Student <h4 id='tuser'> ". $row["username"] . '</h4>';
								} else {
									echo "কোন ব্যবহারকারী পাওয়া যায়নি";
								}
							?>
							<img src='images/35656546546d-2.png' alt='Rotating Image' class='infinite-rotation'>	
										</p>		
								</div>
							</div>
						</div>
								
				
				
			 </div>
	</div>
	
	
	
   </div>
   
   
</div>

</body>
</html>
