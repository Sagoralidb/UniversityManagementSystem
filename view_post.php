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
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    $sql = "SELECT * FROM user_post WHERE post_id='$post_id'";
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
				<h1><?php echo"{$info['post_title']}"; ?></h1>
		<table class="table table-bordered" id="">
			<tr>
			<td>
			<?php
				
				$result = mysqli_query($data, $sql);
				echo "<h6>{$info['username']}</h6>"; 
			?>
			</td>
			<td>
				<h6>Date: <?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['post_time']);
                        echo date($desiredDateFormat, $timestamp);
                        ?>
			</td>
				</h6>
			<td>Time:
			<?php 
						//টাইম শো করার হবে 
					$desiredFormat='h:i A';	
					$timestamp=strtotime($info['post_time']);
					echo date($desiredFormat,$timestamp); 
					?>
			</td> 
		  </tr>	
		 </table>	
				
				 <?php $feature_image = $info['feature_image']; // Get the image file name from the database
					$image_path = "uploads/" .$feature_image; // Path to the image file
					echo "<img src='$image_path' alt='N/A' style='max-width: 70%; max-height: 70%;border-radius:5px;margin-left:5%';/>";
					?>
				</div>
				<br>
                <div class="container">   
                    <p class="text-justify"><?php echo"{$info['post_content']}"; ?></p>
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