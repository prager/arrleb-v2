<!-- Edit Lecture Modal -->
		  <div class="modal fade" id="editData<?php echo $row['id_staff']; ?>" role="dialog">
		    <div class="modal-dialog">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-pencil"></span> Edit Staff Position</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('staff/edit_staff/' .  $row['id_staff']); ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-10 col-md-offset-1">
			            <?php $data = array(
							'name'          => 'pos_name',
							'id'            => 'pos_name',
			            		'value'         =>  $row['pos_name'],
			            	'placeholder' => 'Position Name',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
						Edit Position Name<br>
						<?php echo form_input($data);?>
						</div>						
					</div>	
					<div class="row">&nbsp;</div>
					<div class="row">
			            <div class="col-md-10 col-md-offset-1">
						Assign to Position<br>
						<?php echo form_dropdown('user', $users, $row['id_user'], 'class="form-control"');?>
						</div>						
					</div>			
					</div>					
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
					<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">
			          	<?php echo form_submit('submit', 'Submit Changes', 'class="btn btn-primary btn-block"'); ?>
			          	</div>
		          	</div>
		          	<div class="row">&nbsp;</div>
		        <div class="modal-footer">
		         <p><a href="#" data-dismiss="modal">Cancel</a></p>
		      <?php echo form_close(); ?>
		        </div>
		       </div>
		      </div>
		    </div> 
		    </div>
		    </div>
		    