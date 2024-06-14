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

    // ডাটা পোস্ট করা হয়েছে
    if (isset($_POST['add_subject'])) {
        if (isset($_POST['subject_name'], $_POST['subject_code'])) {
            $subject_name = $_POST['subject_name'];
            $subject_code = $_POST['subject_code'];
            $sub_credit = $_POST['sub_credit'];
        }

        // ডুপ্লিকেট সাবজেক্ট চেক
        $sql = "SELECT * FROM subjectsdetails WHERE subject_name = '$subject_name' OR subject_code = '$subject_code' OR sub_credit='$sub_credit'";
        $result = $data->query($sql);

        if ($result && $result->num_rows > 0) {
            // ডুপ্লিকেট সাবজেক্ট পাওয়া গিয়েছে
            echo "<h1 style='bg-info'>Already exists</h1>";
        } else {
            // ডাটা ডাটাবেজে সংরক্ষণ
            $insertQuery = "INSERT INTO subjectsdetails (subject_name, subject_code,sub_credit) VALUES ('$subject_name', '$subject_code','$sub_credit')";
            if($data->query($insertQuery) === TRUE){
                $_SESSION['message'] = "Subject Added Success";
            } else {
                $_SESSION['message'] = "Failed to add";
				
            }
        }
    }
    ?>
	<h1 class="rounded-lg text-center shadow p-4 mb-4 bg-white">Add New Subject</h1>
	    <!-- Subject Add msg -->
		  <?php if (isset($_SESSION['message'])): ?>
			<h2 style="Background:yellow;"><?php echo $_SESSION['message']; ?></h2>
			<?php unset($_SESSION['message']); // Clear the message after displaying ?>
		<?php endif; ?>
    <form action="add_subject.php" method="POST" style="border:2px solid #fff; padding:10px;" class="rounded-lg shadow-none p-4 mb-4 bg-light"onsubmit="return validateForm()">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Write Subject Name" name="subject_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Write Subject Code" name="subject_code">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id="credit" placeholder="Subject Credit" name="sub_credit">
			<div class="text-danger" id="marksErrorCredit"></div>
        </div>
        <button type="submit" class="btn btn-primary" value="Add subject" name="add_subject" >Add Subject</button>
        <button type="reset" class="btn btn-primary"  value="reset">Reset</button>
    </form>


	<!--View All subject-->
<div class="rounded-lg mt-3 bg-light table-responsive"style="padding:5px;margin:5% 0 0% 0%">
<h1 class="text-center">All Subjects</h1>
<?php 
	include"connect.php";

    $sql="select*from subjectsdetails";
    $result=mysqli_query($data,$sql);
    
	?>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                    
                <th>Subjec Name</th>
                <th>Subject Code</th>
                <th>Subject Credit</th>
              </tr>
            </thead>
                <tbody id="myTable">
               <?php 
			   
                  while($info=$result->fetch_assoc() )
                  {
              ?>
                  <tr>
                   
                    <td><?php echo "{$info['subject_name']}"; ?></td>
                    <td><?php echo "{$info['subject_code']}"; ?></td>
                    <td><?php echo "{$info['sub_credit']}"; ?></td>
									<!-- ... -->

                    <td class="text-center">
							<?php  
								include"tools/sub_delete_button.php";// table date delete feature button
							?>
					</td>
					
					<td class="text-center">
					<?php echo"<a href='update_subject.php?id={$info['id']}' class='btn btn-info'>Update</a>";  
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
<script>
    function validateMarks(inputId, errorId, maxAllowed) {
        var input = document.getElementById(inputId);
        var error = document.getElementById(errorId);

        if (input.value > maxAllowed) {
            error.textContent = "Maximum Credit:  " + maxAllowed;
            input.setCustomValidity("Invalid");
        } else {
            error.textContent = "";
            input.setCustomValidity("");
        }
    }

    document.getElementById("credit").addEventListener("change", function() {
        validateMarks("credit", "marksErrorCredit", 4);
    });
	</script>

</body>
</html>
