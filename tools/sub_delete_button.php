<!-- Delete button -->
			<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?php echo $info['id']; ?>">Delete</button>

			<!-- Modal/Popup -->
			<div class="modal fade" id="myModal<?php echo $info['id']; ?>" role="dialog">
			  <div class="modal-dialog modal-sm">
				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title">Delete Now</h4>
				  </div>
				  <div class="modal-body">
					<p>Are you sure to delete ?</p>
				  </div>
				  <div class="modal-footer">
					<?php echo "<a href='delete_subject.php?id={$info['id']}'>Yes</a>"; ?>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>