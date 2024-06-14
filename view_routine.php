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
<div class="container">
	<div id="home" class="container tab-pane active">
    <h3>View Routine</h3>
    <script>
        function showTable() {
            var selectedValue = document.getElementById("routine").value;
            var tables = document.getElementsByTagName("table");

            for (var i = 0; i < tables.length; i++) {
                tables[i].style.display = "none";
            }

            if (selectedValue !== "") {
                document.getElementById("batch" + selectedValue).style.display = "table";
            }
        }
    </script>

    <?php 
    include "connect.php";
    $sql = "SELECT DISTINCT batch_no FROM classroutine";
    $result = mysqli_query($data, $sql);
    ?>

    <label for="routine">Choose a Batch:</label>
    <select id="routine" onchange="showTable()"> 
        <option selected disabled>Select</option>
        <?php while ($info = $result->fetch_assoc()) { ?>
        <option value="<?php echo "{$info['batch_no']}"; ?>">
            <?php echo "{$info['batch_no']}"; ?>
        </option>
        <?php } ?>		
    </select>

    <?php
    $sql = "SELECT DISTINCT batch_no FROM classroutine";
    $result = mysqli_query($data, $sql);

    while ($row = $result->fetch_assoc()) {
        $batch_no = $row['batch_no'];
		 
        $sql_inner = "SELECT * FROM classroutine WHERE batch_no = '$batch_no'";	
        $result_inner = mysqli_query($data, $sql_inner);
    ?>
	
	<?php 
		error_reporting(0);
		if($_SESSION['message']){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>

    <table id="batch<?php echo $batch_no; ?>" class="rounded-lg text-center shadow p-4 mb-4 bg-white table-bordered table-striped table-hover" style="display:none;border-collapse: separate;border-spacing: 0; min-width:1100px;" >
		<tr>
		<td colspan="6">
		<?php echo "<h2 class='text-center'>Schedule for Batch $batch_no</h2>";?>
		</td>
		</tr>
        <tr>
            
            <th class="text-center">Days</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Teacher</th>
            <th>Room</th>
            <th>Subject</th>
            <th>Code</th>
        </tr>
		
       <?php
        while ($row_inner = $result_inner->fetch_assoc()) {
			//টাইম ফর্মেট কনর্ভাট করে করি  (09:00:00.00000) ও (10:00:00.00000) থেকে  (9:00AM)ও(10:00AM) ফর্মেটে
            $start_time = date('g:iA', strtotime($row_inner['start-time']));
            $end_time = date('g:iA', strtotime($row_inner['end-time']));
        ?>
      
        <tr>
            
            <td class="text-center"><?php echo $row_inner['days']; ?></td>
            <td><?php echo $start_time; ?></td>
            <td><?php echo $end_time; ?></td>
            <td><?php echo $row_inner['teacher']; ?></td>
            <td><?php echo $row_inner['room']; ?></td>
            <td><?php echo $row_inner['subject']; ?></td>
            <td><?php echo $row_inner['subject_code']; ?></td>
            
			<td class="text-center"style="width:50px">	
				<form action="delete_routine.php" method="get">
    <input type="hidden" name="id" value="<?php echo $row_inner['id']; ?>">
    <button type="submit" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?php echo $row_inner['id']; ?>">Delete</button>
</form>

			</td>
			
        </tr>
        <?php
        }
        ?>
    </table>

    <?php
    }
    ?>
</div>



</div>


</body>
</html>
