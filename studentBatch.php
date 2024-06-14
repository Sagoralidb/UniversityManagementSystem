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
		  <title>student batch</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include"cdn.php";?>
		  <!--admin sideber-->

	</head>
<body>

<?php 
	include "menu/panel_nav_top.php";
 ?>
 <?php 
	include "menu/adminmenu.php";
 ?>
 <!--Insert Subjec and subject code-->
<div class="container"><br>  
			    <!-- Subject Add msg -->
		  <?php if (isset($_SESSION['message'])): ?>
			<h2 style="color:white;"><?php echo $_SESSION['message']; ?></h2>
			<?php unset($_SESSION['message']); // Clear the message after displaying ?>
		<?php endif; ?>
			<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		?>

<div class="container">
    <?php 
   include"connect.php";
	$sql="select*from studentbatch";
    $result=mysqli_query($data,$sql);

    // ডাটা পোস্ট করা হয়েছে
    if (isset($_POST['create_batch'])) {
        if (isset($_POST['student_batch'])) {
            $student_batch = $_POST['student_batch'];      
        }

        // ডুপ্লিকেট চেক
        $sql = "SELECT * FROM studentbatch WHERE student_batch = '$student_batch'";
        $result = $data->query($sql);

        if ($result && $result->num_rows > 0) {
            // ডুপ্লিকেট সাবজেক্ট পাওয়া গিয়েছে
            echo "<h1 style='Background:yellow;'>Already exists</h1>";
        } else {
            // ডাটা ডাটাবেজে সংরক্ষণ
            $insertQuery = "INSERT INTO studentbatch (student_batch) VALUES ('$student_batch')";
            if($data->query($insertQuery) === TRUE){
                $_SESSION['message'] = "New Batch Created";
            } else {
                $_SESSION['message'] = "Failed to Create";
				
            }
        }
    }
    ?>
	<h1 class="text-center">Add New Batch</h1>
	    <!-- Subject Add msg -->
		  <?php if (isset($_SESSION['message'])): ?>
			<h2 style="Background:yellow;"><?php echo $_SESSION['message']; ?></h2>
			<?php unset($_SESSION['message']); // Clear the message after displaying ?>
		<?php endif; ?>
    <form action="studentBatch.php" method="POST" style="border:2px solid #fff; padding:10px;" class="rounded-lg">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Write Subject Name" name="student_batch" required>
        </div>       
        <button type="submit" class="btn btn-primary" value="create batch" name="create_batch" >Create Batch</button>
        <button type="reset" class="btn btn-primary"  value="reset">Reset</button>
    </form>


	<!--View All subject-->
<div class="rounded-lg mt-3 bg-light table-responsive"style="padding:5px;margin:5% 0 0% 0%">
<h1 class="text-center">All Batch</h1>
<?php 
	include"connect.php";

    $sql="select*from studentbatch";
    $result=mysqli_query($data,$sql);
    
	?>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">   
                
                <th>Batch</th>
              </tr>
            </thead>
                <tbody id="myTable">
               <?php 
			   
                  while($info=$result->fetch_assoc() )
                  {
              ?>
                  <tr>      
                    <td class="text-center"><?php echo "{$info['student_batch']}"; ?></td>

                    <td class="text-center">
							<?php  
								include"tools/delete_batch.php";// table date delete feature button
							?>
					</td>
                  </tr>
						   
						   <?php 
							}
						   ?>
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
							  <!-- Modal -->  
		</tbody>
	</table>
				</div>
		
		</div>

	</div>


</body>
</html>
