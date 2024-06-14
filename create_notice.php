<?php 

session_start();
ob_start(); // Start output buffering
if (!isset($_SESSION['usertype'])) {
    header("location: login.php");
    exit;
}

if ($_SESSION['usertype'] !== "teacher" && $_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="author" content="w3techbd" />
    <title>Create New Notice</title>
    <?php include "cdn.php";?>
	<style>
		#calendar-container{
			font-family:Arial,sans-serif;
			display:inline-block;
		}
	</style>
</head>
<body>
    <?php include "menu/panel_nav_top.php";?>
    <?php include "menu/post_menu.php";?>

    <div style="margin:10px 50px 100px 200px; padding: 10%;">
        <section class="bg-dark" style="border:5px solid #fff;padding:15px;box-shadow: 10px 10px 50px 12px lightblue;">
            <table class="table-dark">
                <h1 style="color:white;">Create New Notice<sup class="text-success">
				
				<?php
        include"connect.php";
		$username = $_SESSION['username'];
		$sql="select*from user_post WHERE username='$username' ORDER BY  post_time DESC";
		$result=mysqli_query($data,$sql);
				echo $username; ?>
				</sup>
				</h1>
				 <?php
					error_reporting(E_ALL);
					ini_set('display_errors', 1);
					?>

                <?php if (isset($_SESSION['message'])): ?>
                    <h2 class="text-success"><?php echo $_SESSION['message']; ?></h2>
                    <?php unset($_SESSION['message']); // Clear the message after displaying ?>
                <?php endif; ?>
<?php
        include "connect.php";

        if (isset($_POST['post_now'])) {
			
            $username = $_SESSION['username'];//get the username for another table
            $query = "SELECT * FROM user WHERE username='$username'";
            $notice = $_POST['notice'];
            $expirydate = $_POST['expirydate'];
            $notice_type = $_POST['notice_type'];		
			$department_code = $_POST['department_code'];

           // File upload was successful, you can save the file name in the database or perform other operations here
    $sql = "INSERT INTO notice (username, notice,expirydate,department_code,notice_type) VALUES ('$username', '$notice','$expirydate',
	'$department_code','$notice_type')";
         $result = mysqli_query($data, $sql);

                    if ($result) {
                        $_SESSION['message'] = "Data uploaded Successfully!";
                    } 
						header('location:create_notice.php');
							ob_end_flush(); // Flush the output buffer
	}
        ?>
                <form action="create_notice.php" method="POST" enctype="multipart/form-data">
					
					<div class="row">
					<div class="col-sm-6">
						<div id="calender-container">
							<label for="date-picker" style="color:white;">Select Expired date</label>
							<input type="date" id="date-picker"name="expirydate" min="<?php echo date('Y-m-d');?>" required>
							<script>
								document.getElementById('date-picker').min=new Date().toISOString().split('T')[0];
							</script>
						</div>
					</div>
						<div class="col-sm-3">
		<?php 
		include "connect.php";

		$sql = "SELECT department_code FROM departments";
		$result = mysqli_query($data, $sql);
	?>

				<select id="departments" name="department_code" >
				<option selected disabled> Select departments</option>
				<?php while($info = $result->fetch_assoc()) { ?>
				
					<option value='<?php echo "{$info['department_code']}"; ?>'>
					<?php echo "{$info['department_code']}"; ?>
					</option>
					
				<?php }?>
			
				</select>
						</div>
				<div class="col-sm-3">
							<select name="notice_type" class="custom-select mb-3"style="width:100px;"required>
				  <option disabled > Notice type</option>
				  <option value="General">General</option>
				  <option value="Payment">Payment</option>				  
				  <option value="Payment">Exam</option>				  
				  <option value="Payment">Vacation</option>				  
				</select>
				</div>
					</div>
					
                    <div class="form-group">
                        <label for="comment" style="color:white;">Notice:</label>
                        <textarea class="form-control" rows="4" id="txt" name="notice" required></textarea>
                        <button type="submit" class="btn btn-block btn-primary" name="post_now">Post Now</button>
                    </div>
                </form>
            </table>
        </section>
		<div class="container mt-5">
		<h1 style="color:white;">Notice<sup style="font-size:12px;"><i>
				
				(<?php
        include"connect.php";
		$username = $_SESSION['username'];
		$sql="select*from notice WHERE username='$username' ORDER BY  notice_time DESC";
		$result=mysqli_query($data,$sql);
				echo "$username";?>)
				</i></sup>
				</h1>
        <table class="table table-bordered ">
            <thead style="form-control">
                <tr style="background:white;font-size:20px;text-align:center;"> 
					<th>Date</th>
                    <th>Notice</th>
                    
                    <th>Time</th>
                    <th>Expired date</th>
                    <th>Specifiation</th>
                    <th>Type</th>
                    <th>View</th>                  
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody style="background:gray">
			
			<?php 
				
                  while($info=$result->fetch_assoc() ){	  
              ?>
                <tr style="color:white">
				<td>
					
					<?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['notice_time']);
                        echo date($desiredDateFormat, $timestamp);
                      ?>
					</td>
                    <td class="text-justify"><?php echo substr("{$info['notice']}", 0, 500); ?></td>   
                    
                    <td style="width:100px;">
					<?php
                        $desiredFormat = 'h:i A';
                        $timestamp = strtotime($info['notice_time']);
                        echo date($desiredFormat, $timestamp);
                        ?>
					</td>
					<td>
					<?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['expirydate']);
                        echo date($desiredDateFormat, $timestamp);
                      ?>
					</td>
					<td>
						<?php echo "{$info['department_code']}"; ?>
					</td> 
						<td>
							<?php echo "{$info['notice_type']}" ;?>
						</td>
                    <td class="text-center">
					<?php //echo "<a href='view_profile.php?user_id={$info['id']}' class='btn btn-info'>View</a>";
					 echo "<a href='view_notice.php?notice_id={$info['notice_id']}' class='btn btn-info'>View</a>"; 
					?>
					</td>
					
					<td class="text-center">
							<!-- Delete button -->
						<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?php echo $info['notice_id']; ?>">Delete</button>

						<!-- Modal/Popup -->
						<div class="modal fade" id="myModal<?php echo $info['notice_id']; ?>" role="dialog">
						  <div class="modal-dialog modal-sm">
							<div class="modal-content">
							  <div class="modal-header">
								<h4 class="modal-title text-info text-center"style="margin-left: 50px;">Delete Now</h4>
							  </div>
							  <div class="modal-body">
								<p class="text-danger">Are you sure to delete ?</p>
							  </div>
							  <div class="modal-footer">
								<?php echo "<a href='delete_notice.php?notice_id={$info['notice_id']}'>Yes</a>"; ?>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </div>
						</div>
					</td>
				  <?php }?>
                </tr>
       
            </tbody>
        </table>
    </div>
		
    </div>
	
	
 
</body>
</html>
