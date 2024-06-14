<?php 

session_start();

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
</head>
<body>
    <?php include "menu/panel_nav_top.php";?>
    <?php include "menu/post_menu.php";?>

	
	<div class="container mt-5">
		<h1 style="color:white;">Notice<sup style="color:black;"><i>
				
				<?php
        include"connect.php";
		$username = $_SESSION['username'];
		$sql="select*from notice ORDER BY  notice_time DESC";
		$result=mysqli_query($data,$sql);
				?>
				</i></sup>
				</h1>
        <table class="table table-bordered ">
            <thead style="form-control">
                <tr style="Background:white;"> 
					<th>Date</th>
                    <th>Notice</th>
                    
                    <th>Time</th>
                    <th>Expired date</th>
                    <th>Specifiation</th>
                    <th>Type</th>
                    <th>View</th>                                     
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
 
</body>
</html>
