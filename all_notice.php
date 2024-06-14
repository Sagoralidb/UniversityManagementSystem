<?php 
include "header.php";
?>

    <div style="margin:10px 50px 50px 200px;">
       
    </div>
	
	<div class="container mt-5">
		<h1 style="color:white;text-align:center">All Notice<i>
				
				<?php
        include"connect.php";		
		$sql="select*from notice ORDER BY  notice_time DESC";
		$result=mysqli_query($data,$sql);
				?>
				</i></sup>
				</h1>
         <table class="table table-bordered ">
            <thead style="form-control">
                <tr style="Background:white;"> 
					<th>Date</th>
                    <th>Notice</th>
                    
                    <th>Time</th>
                    <th>Expired date</th>
                    <th>Specifiation</th>
                    <th>Type</th>
                    <th>View</th>                                     
                </tr>
            </thead>
            <tbody style="background:gray">
			
			<?php 
				
                  while($info=$result->fetch_assoc() ){	  
              ?>
                <tr style="color:white">
				<td>
					
					<?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['notice_time']);
                        echo date($desiredDateFormat, $timestamp);
                      ?>
					</td>
                    <td class="text-justify"><?php echo substr("{$info['notice']}", 0, 500); ?></td>   
                    
                    <td style="width:100px;">
					<?php
                        $desiredFormat = 'h:i A';
                        $timestamp = strtotime($info['notice_time']);
                        echo date($desiredFormat, $timestamp);
                        ?>
					</td>
					<td>
					<?php
                        $desiredDateFormat = 'Y-m-d';
                        $timestamp = strtotime($info['expirydate']);
                        echo date($desiredDateFormat, $timestamp);
                      ?>
					</td>
					<td>
						<?php echo "{$info['department_code']}"; ?>
					</td> 
						<td>
							<?php echo "{$info['notice_type']}" ;?>
						</td>
                    <td class="text-center">
					<?php //echo "<a href='view_profile.php?user_id={$info['id']}' class='btn btn-info'>View</a>";
					 echo "<a href='view_notice.php?notice_id={$info['notice_id']}' class='btn btn-info'>View</a>"; 
					?>
					</td>
										
				  <?php }?>
                </tr>
       
            </tbody>
        </table>

    </div>

<?php 
include"footer.php";
?>