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
		  <title>Subject</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 
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
 <div class="container">
		 <h1>All Subject</h1>
		 <?php 
		include"connect.php";
		$sql="SELECT COUNT(*) as subject_name FROM subjectsdetails";
		$result=$data->query($sql);
		if($result->num_rows>0){
			$row=$result->fetch_assoc();
			echo"Total Subject : ".$row['subject_name'];
		}else{
			echo"কোনো সাবজেক্ট পাওয়া যায় নি";
		}

$data->close();
?>	
		 <div class="row">
	<?php 
		include"connect.php";
		$sql="SELECT*FROM subjectsdetails";
		$result=mysqli_query($data,$sql);

		 while($info = $result->fetch_assoc()) { ?>
  <div class="column">
    <div class="card" style="height:150px;margin:10px">
      <h6><?php echo $info['subject_name']; ?></h6>
      <p><?php echo $info['subject_code']; ?></p>
      <p><?php echo $info['sub_credit']; ?></p>
    </div>
  </div>
		<?php }?>
 
  
</div>
 </div>




</body>
</html>
