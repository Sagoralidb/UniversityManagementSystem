
<!-- Session manage-->
<?php 
include"session.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>All User</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include"cdn.php";?>
					<!--admin sideber-->
	</head>
<body>
<?php 
	include "menu/panel_nav_top.php";
 ?>
					<!-- This section for amdin menubar-->
 <?php 
	include "menu/adminmenu.php";
 ?>

<div class="container">
<br><br><br>
					<!-- All Applied students data-->

	<?php 
		error_reporting(0);
		if($_SESSION['message']){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
  <!-- Let write some php code for display all student data in this section-->
	<?php 
	include"connect.php";

    $sql="select*from user ORDER BY time DESC";
    $result=mysqli_query($data,$sql);
    
	?>
<div class="container mt-3">
<h1>All User</h1>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered bg-light">
    <thead>
      <tr>
		<th>ID</th>      
        <th>UserName</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
		<th>Profile Picture</th>
		<th>User Type</th>
		<th>Created Date</th>
		<th>Created Time</th>
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
                    <td class="text-center"><?php echo "{$info['id']}"; ?></td>     
                    <td><?php echo "{$info['username']}"; ?></td>
                    <td><?php echo "{$info['fname']}"; ?></td>
                    <td><?php echo "{$info['email']}"; ?></td>
                    <td><?php echo "{$info['phone']}"; ?></td>
					
										<!-- ... -->
					<td>	
					<?php
					$profile_picture = $info['profile_picture']; // Get the image file name from the database
					$image_path = "uploads/" . $profile_picture; // Path to the image file
					echo "<img src='$image_path' alt='N/A' style='max-width: 50px; max-height: 50px;border-radius:30px;margin-left:5%';/>";
					?>
					</td>
<!-- .DATE. -->
					<td><?php echo "{$info['usertype']}"; ?></td>
					<td>
					<?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['time']);
                        echo date($desiredDateFormat, $timestamp);
                      ?>
					</td>
					<!-- TIME -->
					<td>
					<?php
						//টাইম শো করার হবে 
					$desiredFormat='h:i A';	
					$timestamp=strtotime($info['time']);
					echo date($desiredFormat,$timestamp); 
					?>
					</td>
			
					
                    <td class="text-center">
							<?php  
								include"tools/delete_userbtn.php";// table date delete feature button
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
<!--  Js for delete button popup -->
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


</body>
</html>
