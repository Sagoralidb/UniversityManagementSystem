
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <?php 
		include "cdn.php";
	?>	
	
	
    <title>
	<?php
	include "connect.php";

	$sql = "SELECT * FROM title ORDER BY id DESC LIMIT 1";
	$resultTitle = mysqli_query($data, $sql);

	if (!$resultTitle) {
		die("Title query failed: " . mysqli_error($data));
	}?>
	<?php
            while ($info = mysqli_fetch_assoc($resultTitle)) {
                echo $info['newtitle'];
            }
			// Close the database connection
		mysqli_close($data);
			?>
	</title>
</head>

<body>
    <header class="navbar bg-info">
        
		<div class="row">
            <a href="index.php">

		<?php
		include "connect.php";
		$sql = "SELECT * FROM logo ORDER BY file DESC LIMIT 1";
		$result = mysqli_query($data, $sql);
		// Check if the query was successful
		if (!$result) {
			die("Query failed: " . mysqli_error($data));
		}
		while ($info = $result->fetch_assoc()) {
			$profile_picture = $info['file'];
			$image_path = "uploads/" . $profile_picture;
			echo "<img src='$image_path' alt='N/A' style='max-width: 50px; max-height: 50px; border-radius: 30px; margin-left: 5%;' />";
		}

		// Close the database connection
		mysqli_close($data);
		?>
</a>


<p style="color:white;margin:15px;">
	<?php
	include "connect.php";

	$sql = "SELECT * FROM title ORDER BY id DESC LIMIT 1";
	$resultTitle = mysqli_query($data, $sql);

	if (!$resultTitle) {
		die("Title query failed: " . mysqli_error($data));
	}
    while ($info = mysqli_fetch_assoc($resultTitle)) {
    echo $info['newtitle'];
       }
    ?>
</p>
		</div>
          
            <nav class="navbar navbar-expand-md  navbar-dark">
              
              <a class="navbar-brand" href="index.php">Home</a>
              <a class="btn navbar-brand" href="login.php">Login</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>

              <?php
					include "menu/main_menu.php";
			  ?>
            </nav>
        
    </header>
   