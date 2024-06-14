<?php 
session_start();
ob_start(); // Start output buffering
if ($_SESSION['usertype'] !== "admin") {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>Finance</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="css/select2.min.css" rel="stylesheet">
		 <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

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
</style>
<?php include"cdn.php"; ?> 	
	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>
<div class="row">
	
	 <?php 
		include "menu/adminmenu.php";
	 ?>
	
<div class="col-md-10"style="margin-left:15%">
						

 <!-- এখানে এখন আমরা সকল তথ্য  দেখাব-->
		  <!-- Let write some php code for display all student data in this section-->
			<?php 
			include"connect.php";
			     $sql = "SELECT finance.*, user.username  FROM finance JOIN user  ON finance.student_id=user.student_id ORDER by finance.fid DESC";
	
			//$sql="select*from finance";
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
		<h1 class="text-center">Student Fees Details</h1>
		<input class="form-control" id="myInput" type="text" placeholder="Search..">
		  <br>
				  <table class="table table-bordered">
					<thead>
					  
					  <tr class="text-center">
						<th class="rotate">Stu.lD</th>      
						<th>UserName</th>					               						
						<th>Payment date</th>
						<th class="rotate">CoursePrice</th>
						<th>Semister</th>
						<th>SemisterFee</th>
						<th>Tranjection Id</th>
						<th>Fees</th>
						<th>Voucher</th>
						<th class="rotate">Deu</th>
						<th>TotalPaid</th>
						<th>ExtraPaid</th>
						<th>Fine</th>
						<th class="rotate">Notice date</th>
						<th>Expiry Date</th>
						
												
					   </tr>
					 
					</thead>
						<tbody id="myTable">
					   <?php 
					   
						  while($info=$result->fetch_assoc() )
						  {
					  ?>
						  <tr>
							<td class="text-center"><?php echo "{$info['student_id']}"; ?></td>  
      						
							<td>
							<?php echo "{$info['username']}"; ?>
							</td>
							<td>
							<?php
								$desiredDateFormat = 'Y-m-d';
								$timestamp = strtotime($info['pay_date']);
								echo date($desiredDateFormat, $timestamp);
							?>
							</td>
							<td>???</td>
							<td><?php echo "{$info['semister']}"; ?></td>
							<td>???</td>
							<td><?php echo "{$info['tranjection_id']}"; ?></td>
							<td><?php echo "{$info['fees']}"; ?></td>
							<td>
							 <?php
                        $screenshort = $info['screenshort'];
                        $image_path = "uploads/" . $screenshort;
                        echo "<img src='$image_path' alt='N/A' style='max-width: 70%; max-height: 70%;border-radius:5px;margin-left:5%';/>";
                        ?>
							</td>
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
					
						


							<td class="text-center">
									<?php  
										include"tools/delete_button.php";// table date delete feature button
									?>
							</td>
							<td class="text-center">
							<?php 
							echo "<a href='#' class='btn btn-info'>Update</a>"; 
							?>
							</td>
						<td class="text-center">
							<?php 
							 echo "<a href='#' class='btn btn-info'>View</a>"; 
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
<!-- Include Select2 JS -->
<script src="js/select2.min.js"></script>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
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
