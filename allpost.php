<?php 

session_start();
ob_start();
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
    <title>All post</title>
    <?php include "cdn.php";?>
</head>
<?php	/*pagination এর জন্য php তে ফাংশন তৈরী করা হলো এই ফংশন টি তৈরীর উদ্দেশ্য হলো যে পেজের টেবিলে উপরে এবং নিচে আামর পেজিনেশন ফিচার দরকার কিন্তু কোড যাতে 
ডুব্লিকেট লিখা না লাগে তাই একটি ফাংশন এর ভতির লিখে রাখা হলে এবং যেখানে দরকার শেখানে ফাংশন কল করে ব্যবহার করা হবে */
			function generatePagination($current_page, $total_pages) {
				echo '<ul class="pagination">';				
				if ($current_page > 1) {
					echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '">Previous</a></li>';
				}
				for ($i = 1; $i <= $total_pages; $i++) {
					echo '<li class="page-item ';
					if ($current_page == $i) {
						echo 'active';
					}
					echo '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
				}
				if ($current_page < $total_pages) {
					echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">Next</a></li>';
				}
				echo '</ul>';
			}
		?>
<body>
    <?php include "menu/panel_nav_top.php";?>
    <?php include "menu/post_menu.php";?>

    <div style="margin:10px 100px 100px 200px; padding:2%;">
 <div class="container mt-5">
    <h1 style="color:white;">All posts</h1>
	 <?php
            include "connect.php";

            // Number of posts per page
            $posts_per_page = 10;

            // Fetch total posts
            $sql_count = "SELECT COUNT(*) AS total_posts FROM user_post";
            $result_count = mysqli_query($data, $sql_count);
            $row_count = mysqli_fetch_assoc($result_count);
            $total_posts = $row_count['total_posts'];

            // Calculate total pages
            $total_pages = ceil($total_posts / $posts_per_page);

            // Current page
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

            // Calculate the offset for the query
            $offset = ($current_page - 1) * $posts_per_page;

            // Fetch posts for the current page
            $sql = "SELECT * FROM user_post ORDER BY post_time DESC LIMIT $offset, $posts_per_page";
            $result = mysqli_query($data, $sql); ?>
		<?php
			// ব্যবহারঃ
			generatePagination($current_page, $total_pages);
			?>
    <table class="table table-bordered">
        <thead style="background:white">
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Feature Image</th>             
                <th>Time</th>
                <th>View</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody style="background:gray">

           <?php 

            while ($info = $result->fetch_assoc()) {
            ?>
                <tr style="color:white">
                    <td>   <?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['post_time']);
                        echo date($desiredDateFormat, $timestamp);
                        ?></td>
                    <td><?php echo "{$info['post_title']}"; ?></td>
                    <td class="text-justify"><?php echo substr("{$info['post_content']}", 0, 300); ?></td>
                    <td>
                        <?php
                        $feature_image = $info['feature_image'];
                        $image_path = "uploads/" . $feature_image;
                        echo "<img src='$image_path' alt='N/A' style='max-width: 70%; max-height: 70%;border-radius:5px;margin-left:5%';/>";
                        ?>
                    </td>
                   
                    <td>
                        <?php
                        $desiredFormat = 'h:i A';
                        $timestamp = strtotime($info['post_time']);
                        echo date($desiredFormat, $timestamp);
                        ?>
                    </td>
                    <td class="text-center">
                        <?php echo "<a target='_blank' href='view_post.php?post_id={$info['post_id']}' class='btn btn-info'>View</a>"; ?>
                    </td>
                    <td class="text-center">
                            			
					
<a href='update_post.php?post_id=<?php echo $info['post_id']; ?>' class='btn btn-info'>Update</a>
				   </td>
                    <td class="text-center">
										<!-- Delete button -->
							<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?php echo $info['post_id']; ?>">Delete</button>
							<!-- Modal/Popup -->
							<div class="modal fade" id="myModal<?php echo $info['post_id']; ?>" role="dialog">
							  <div class="modal-dialog modal-sm">
								<div class="modal-content">
								  <div class="modal-header">
									<h4 class="modal-title" style="color:gray;margin-left:71px;">Delete Now</h4>
								  </div>
								  <div class="modal-body">
									<p class="text-danger">Are you sure to delete ?</p>
								  </div>
								  <div class="modal-footer">
									<?php echo "<a href='delete_post.php?post_id={$info['post_id']}'>Yes</a>"; ?>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								</div>
							  </div>
							</div>	
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

   	<?php
			// ব্যবহারঃ
			generatePagination($current_page, $total_pages);
			?>
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
									
</body>
</html>
