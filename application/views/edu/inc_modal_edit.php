<!-- Edit Class Modal -->
		  <div class="modal fade" id="editData<?php echo $row['id']; ?>" role="dialog">
		    <div class="modal-dialog modal-lg">

		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-pencil"></span> Edit Class</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('edu/edit_class/' .  $row['id']); ?>
		            <div class="form-group">
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
						<?php $data = array(
							'name'          => 'club',
							'id'            => 'club',
			            		'value'         =>  $row['club'],
			            	'placeholder' => 'Club',
			                'class'			=> 'form-control',
							'maxlength'     => '128');?>
						Club
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
		            <div class="row">
			            <div class="col-md-8 col-md-offset-1">
			            <?php $data = array(
							'name'          => 'course',
							'id'            => 'fname',
			            		'value'         =>  $row['course'],
			            	'placeholder' => 'Course',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
						Course
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-2">
							Category
			          	<?php echo form_dropdown('category', array('none', 'Tech', 'Gen', 'Ext', 'Testing', 'GOTA', 'Em Prep', 'Aux', 'In-1-Day'), $row['category'], 
			          			'class="form-control"'); ?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
						<?php $data = array(
							'name'          => 'date_from',
							'id'            => 'date_from',
						    'value'         =>  date("Y-m-d", $row['date_from']),
						    'type' => 'date',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Date From
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-5">
						<?php $data = array(
							'name'          => 'date_to',
							'id'            => 'date_to',
						    'value'         =>  date("Y-m-d", $row['date_to']),
						    'type' => 'date',
			            	'placeholder' => 'To',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Date To
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
						<?php $data = array(
							'name'          => 'fee',
							'id'            => 'fee',
			            		'value'         =>  '$' . $row['fee'],
			            	'placeholder' => 'Fee',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Fee
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-5">
						<?php $data = array(
							'name'          => 'status',
							'id'            => 'status',
			            		'value'         =>  $row['status'],
			            	'placeholder' => 'status',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Status
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'location',
							'id'            => 'location',
			            		'value'         =>  $row['location'],
			            	'placeholder' => 'status',
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
							'name'          => 'details_url',
							'id'            => 'details_url',
			            		'value'         =>  $row['details'],
			            	'placeholder' => 'status',
			                'class'			=> 'form-control',
							'maxlength'     => '512');?>
						Description and URL References
						<?php //echo form_input($data);?>
						<?php
                            $data = array(
                            'name' => 'details_url',
                            'id' => 'details_url',
                                'value' => $row['details'],
                            'cols' => 100,
                            'rows' => 7,
                            'class' => 'form-control'
                            );
                            echo form_textarea($data);
                        ?>
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
