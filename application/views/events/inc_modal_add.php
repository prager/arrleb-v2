<!-- Edit Class Modal -->
		  <div class="modal fade" id="addEvent" role="dialog">
		    <div class="modal-dialog modal-lg">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-copy"></span> Add Event</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('events/edit_event/'); ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-10 col-md-offset-1">
			            <?php $data = array(
							'name'          => 'club',
							'id'            => 'club',
			            		'value'         =>  '',
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
						    'value'         =>  '',
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
						    'value'         =>  '',
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
			          	    'Thursday', 'Friday'), 0, 'class="form-control"'); ?>
						</div>	
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'location',
							'id'            => 'location',
			            		'value'         =>  '',
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
			            		'value'         =>  '',
			            	'placeholder' => 'Radio Coordinator',
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
			            		'value'         =>  '',
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
			          	<?php echo form_submit('submit', 'Add New Event', 'class="btn btn-primary btn-block"'); ?>
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
