<table class="table table-bordered ">
            <thead style="form-control">
                <tr> 
					<th>Date</th>
                    <th>Notice</th>
                    
                    <th>Time</th>
                    <th>Expired date</th>
                    <th>Specifiation</th>
                    <th>Type</th>
                    <th>View</th>                  
                    <th>Delete</th>
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