<?php 
include "header.php";
?>
<body>  
<?php 
//include "header.php";
include"connect.php";
?>

<!--body-->
<div class="container">
  <div class="row">
    <div class="col-sm-8" style="background-color:lavender;"><br>
 	<?php 
if (isset($_GET['notice_id'])) {
    $notice_id = $_GET['notice_id'];

    $sql = "SELECT * FROM notice WHERE notice_id='$notice_id'";
    $result = mysqli_query($data, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $info = $result->fetch_assoc();
        // Rest of your code to display the post
    } else {
        // Handle the case when no post with the specified post_id is found
        echo "No post found with this ID.";
    }
} else {
    // Handle the case when post_id is not provided in the URL
    echo "Post ID is missing in the URL.";
}
?> 
				<div>				
		<table class="table table-bordered" id="">
		<tr>
			 <p class="display-4 text-center">Notice Board</p>
		</tr>
			<tr>
			<td>
			<?php
				
				$result = mysqli_query($data, $sql);
				echo "<h6>{$info['username']}</h6>"; 
			?>
			</td>
			<td>
				<h6>Date:<?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['notice_time']);
                        echo date($desiredDateFormat, $timestamp);
                      ?>
			</td>
				</h6>
			<td>Time:
			<?php 
						//টাইম শো করার হবে 
					$desiredFormat='h:i A';	
					$timestamp=strtotime($info['notice_time']);
					echo date($desiredFormat,$timestamp); 
					?>
			</td> 
			
		  </tr>	
		 </table>	
		 
				</div>
				<br>
                <div class="container">   
                    <p class="text-justify"><?php echo"{$info['notice']}"; ?></p>
                </div>
		<div class="row">
				
			<div class="col-sm-2">
				<lable class="bg-warning">NoticeFor:<?php echo"{$info['department_code']}"; ?></lable>
			</div>
			<div class="col-sm-2">
				<lable class="bg-warning">Type:<?php echo"{$info['notice_type']}"; ?></lable>
			</div>
			<div class="col-sm-2">
				
				<?php 
						//টাইম শো করার হবে 
					$desiredFormat='Y-m-d';	
					$timestamp=strtotime($info['expirydate']);
					echo "<lable class='bg-warning'>ExpiredDate:" .date($desiredFormat,$timestamp); 
					?>
				
			</div>
		</div>	
    </div>
<?php 
	include"tools/sideber.php";
?>
  </div>
  
</div>



<?php 
include"footer.php";
?>