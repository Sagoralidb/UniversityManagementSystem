<!-- We will use this page to display new studnet applicaion data-->
<!-- Session manage-->
<?php 
//session_start();// Session managed
include "Session.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		  <title>New Admission Data</title>
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
					<!-- All Applied students data-->
  <h1>Admission Data</h1>
  <!-- Let write some php code for display all the  new student applicaion date in this section. At first we will connect to your database to deisple the table date-->
	<?php 

		include"connect.php";

    $sql="select*from admission";
    $result=mysqli_query($data,$sql);
    
	?>


  <div class="row bg-light"style="padding:10px;">

          <table class="table table-bordered">
            <thead>
              
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
               </tr>
             
            </thead>
                <tbody>
               <?php 
                  while($info=$result->fetch_assoc() )
                  {
              ?>
                  <tr>
                    <td><?php echo "{$info['id']}"; ?></td>
                    <td><?php echo "{$info['name']}"; ?></td>
                    <td><?php echo "{$info['email']}"; ?></td>
                    <td><?php echo "{$info['phone']}"; ?></td>
                    <td><?php echo "{$info['message']}"; ?></td>
                  </tr>
               <?php 
                }
               ?>
                  
                </tbody>
            </table>

  </div>
</div>




</body>
</html>
