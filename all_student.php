
<!-- Session manage-->
<?php 
include"session.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>All Student</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include"cdn.php";?>
					<!--admin sideber-->
<style>
.rotate{
rotate:-60deg;
line-height:2;
}
</style>
	</head>
<body>
<?php 
	include "menu/panel_nav_top.php";
 ?>
<div class="row">					<!-- This section for amdin menubar-->
 <?php 
	include "menu/adminmenu.php";
 ?>



  <div class="col-md-10">
  <!-- Let write some php code for display all student data in this section-->
	<?php 
	include"connect.php";
    $sql="select*from user WHERE usertype='student' ORDER BY time DESC";
    $result=mysqli_query($data,$sql);
	?>
<br><br>
					<!-- All Applied students data-->


  <div class="rounded-lg mt-3 bg-light table-responsive"style="padding:10px;">
  <?php 
		error_reporting(0);
		if($_SESSION['message']){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
<h1>All Student</h1>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
          <table class="table table-bordered">
            <thead>
              
              <tr class="text-center">
                <th class="rotate">Stu.lD</th>      
                <th>UserName</th>
                <th>Full Name</th>               
                <th class="rotate">Batch</th>
                <th>Department</th>
                <th class="rotate">Gender</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Present <br> address</th>
                <th>Permanent<br> address</th>
                <th class="rotate">Degree</th>
                <th>T.S</th>
                <th>Course<br> Duration</th>
                <th>T.Cost</th>
                <th>S.Fee</th>
                <th>NID</th>
                <th>Email</th>
                <th>Phone</th>
				<th>Profile<br> Picture</th>
                <th>Delete</th>
                <th>Update</th>
                <th>Profile</th>
                
               </tr>
             
            </thead>
                <tbody id="myTable">
               <?php 
			   
                  while($info=$result->fetch_assoc() )
                  {
              ?>
                  <tr>
                    <td class="text-center"><?php echo "{$info['student_id']}"; ?></td>     
                    <td><?php echo "{$info['username']}"; ?></td>
                    <td><?php echo "{$info['fname']}"; ?></td>
                    <td><?php echo "{$info['batch_no']}"; ?></td>
                    <td><?php echo "{$info['department']}"; ?></td>
                    <td><?php echo "{$info['gender']}"; ?></td>
                    <td><?php echo "{$info['father']}"; ?></td>
                    <td><?php echo "{$info['mother']}"; ?></td>
                    <td title="<?php echo"{$info['present_address']}"; ?>">
						<a href='#'style=" text-decoration:none;">
							<?php echo substr("{$info['present_address']}",0,30); ?>
						</a>
					</td>
                    <td title="<?php echo"{$info['permanent_address']}"; ?>">
						<a href='#'style=" text-decoration:none;">
							<?php echo substr("{$info['permanent_address']}",0,30); ?>
						</a>
					</td>
                    <td><?php echo "{$info['degree']}"; ?></td>
                    <td><?php echo "{$info['total_semester']}"; ?></td>
                    <td><?php echo "{$info['course_duration']}"; ?></td>
                    <td><?php echo "{$info['total_course_price']}"; ?></td>
                    <td><?php echo "{$info['semester_fee']}"; ?></td>
                    <td><?php echo "{$info['nid']}"; ?></td>
                    <td title="<?php echo "{$info['email']}"; ?>">
						<a href="#"style=" text-decoration:none;">
						<?php echo substr("{$info['email']}",0,10); ?>
						</a>
					</td>
                    <td><?php echo "{$info['phone']}"; ?></td>
					
										<!-- ... -->
					<td>	
					<?php
					$profile_picture = $info['profile_picture']; // Get the image file name from the database
					$image_path = "uploads/" . $profile_picture; // Path to the image file
					echo "<img src='$image_path' alt='N/A' style='max-width: 50px; max-height: 50px;border-radius:30px;margin-left:5%';/>";
					?>
					</td>
<!-- ... -->


					
                    <td class="text-center">
							<?php  
								include"tools/delete_button.php";// table date delete feature button
							?>
					</td>
					<td class="text-center">
					<?php //echo"<a href='update_student.php?student_id={$info['id']}' class='btn btn-info'>Update</a>"; 
					echo "<a href='update_profile.php?user_id={$info['id']}&usertype={$info['usertype']}' class='btn btn-info'>Update</a>"; 
					?>
					</td>
				<td class="text-center">
					<?php //echo "<a href='view_profile.php?user_id={$info['id']}' class='btn btn-info'>View</a>";
					 echo "<a href='view_profile.php?user_id={$info['id']}&usertype={$info['usertype']}' class='btn btn-info'>View</a>"; 
					?>
				</td>
                  </tr>
               
			   <?php 
                }
               ?>
                  
				  <!-- Modal -->

				  
                </tbody>
            </table>
		</div>
 </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</div>
</body>
</html>
