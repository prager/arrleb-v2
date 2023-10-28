<!-- Edit Class Modal -->
		  <div class="modal fade" id="editData<?php echo $row['id']; ?>" role="dialog">
		    <div class="modal-dialog modal-lg">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-pencil"></span> Edit Event</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('events/edit_event/' .  $row['id']); ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-10 col-md-offset-1">
			            <?php $data = array(
							'name'          => 'club',
							'id'            => 'club',
			            		'value'         =>  $row['club'],
			            	'placeholder' => 'Club Name',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
						Club Name
						<?php echo form_input($data);?>
						</div>						
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'name',
							'id'            => 'name',
						    'value'         =>  $row['name'],
			            	'placeholder' => 'Event Name',
			                'class'			=> 'form-control',
							'maxlength'     => '128');?>
						Event Name
						<?php echo form_input($data);?>
						</div>						
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-1">
						<?php $data = array(
							'name'          => 'date',
							'id'            => 'date',
						    'value'         =>  date("Y-m-d", $row['date']),
						    'type' => 'date',
			            	'placeholder' => 'mm/dd/yyyy',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Event Date
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-4">
							Day
			          	<?php echo form_dropdown('day', array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 
			          	    'Thursday', 'Friday'), $this->fill_arrays->get_day_num($row['day']), 'class="form-control"'); ?>
						</div>	
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'location',
							'id'            => 'location',
			            		'value'         =>  $row['location'],
			            	'placeholder' => 'location',
			                'class'			=> 'form-control',
							'maxlength'     => '512');?>
						Location
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'coordinator',
							'id'            => 'coordinator',
			            		'value'         =>  $row['coordinator'],
			            	'placeholder' => 'Coordinator',
			                'class'			=> 'form-control',
							'maxlength'     => '512');?>
						Radio Coordinator
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'web',
							'id'            => 'web',
			            		'value'         =>  $row['web'],
			            	'placeholder' => 'url',
			                'class'			=> 'form-control',
							'maxlength'     => '512');?>
						Web Reference
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
			          	<?php echo form_submit('submit', 'Edit Event', 'class="btn btn-primary btn-block"'); ?>
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
