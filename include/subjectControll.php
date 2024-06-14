			<!--Insert Subjec and subject code-->
<div id="menu2" class="container tab-pane fade"><br>  
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
        }

        // ডুপ্লিকেট সাবজেক্ট চেক
        $sql = "SELECT * FROM subjectsdetails WHERE subject_name = '$subject_name' OR subject_code = '$subject_code'";
        $result = $data->query($sql);

        if ($result && $result->num_rows > 0) {
            // ডুপ্লিকেট সাবজেক্ট পাওয়া গিয়েছে
            echo "<h1 style='bg-info'>Already exists</h1>";
        } else {
            // ডাটা ডাটাবেজে সংরক্ষণ
            $insertQuery = "INSERT INTO subjectsdetails (subject_name, subject_code) VALUES ('$subject_name', '$subject_code')";
            if ($data->query($insertQuery) === TRUE) {
                $_SESSION['message'] = "<script>alert('Subject Added Success')</script>";
            } else {
                $_SESSION['message'] = "<script>alert('Failed to add')</script>";
				
            }
        }
    }
    ?>
	<h3>Add New Subject</h3>
    <form action="#" method="POST" style="border:2px solid #fff; padding:10px;">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Write Subject Name" name="subject_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Write Subject Code" name="subject_code">
        </div>
        <button type="submit" class="btn btn-primary" value="Add subject" name="add_subject" >Add Subject</button>
        <button type="reset" class="btn btn-primary"  value="reset">Reset</button>
    </form>


	<!--View All subject-->
<div class="mt-3 bg-light table-responsive"style="padding:5px;margin:5% 0 0% 0%">
<h1>All Subjects</h1>
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
									<!-- ... -->

                    <td class="text-center">
							<?php  
								include"tools/sub_delete_button.php";// table date delete feature button
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