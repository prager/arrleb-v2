<!-- Edit Class Modal -->
		  <div class="modal fade" id="addClass" role="dialog">
		    <div class="modal-dialog modal-lg">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-copy"></span> Add Class</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('edu/edit_class/'); ?>
		            <div class="form-group">
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
						<?php $data = array(
							'name'          => 'club',
							'id'            => 'club',
			            		'value'         =>  '',
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
							'id'            => 'course',
			            		'value'         =>  '',
			            	'placeholder' => 'Class',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
						Class
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-2">
							Category
			          	<?php echo form_dropdown('category', array('none', 'Tech', 'Gen', 'Ext', 'GOTA', 'Em Prep', 'Aux', 'In-1-Day'), 0, 
			          			'class="form-control"'); ?>
						</div>						
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
						<?php $data = array(
							'name'          => 'date_from',
							'id'            => 'date_from',
						    'value'         =>  '',
						    'type' => 'date',
			            	'placeholder' => 'mm/dd/yyyy',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Date From
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-5">
						<?php $data = array(
							'name'          => 'date_to',
							'id'            => 'date_to',
			            		'value'         =>  '',
						    'type' => 'date',
						    'placeholder' => 'mm/dd/yyyy',
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
			            		'value'         =>  '$',
			            	'placeholder' => 'Fee',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Fee $
						<?php echo form_input($data);?>
						</div>
						<div class="col-md-5">
						<?php $data = array(
							'name'          => 'status',
							'id'            => 'status',
			            		'value'         =>  '',
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
							'name'          => 'details_url',
							'id'            => 'details_url',
			            		'value'         =>  '',
			            	'placeholder' => 'url',
			                'class'			=> 'form-control',
							'maxlength'     => '1024');?>
						URL References
						<?php //echo form_input($data);?>
						<?php 
                            $data = array(
                            'name' => 'details_url',
                            'id' => 'details_url',
                            'value' => '',
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
						<div class="col-md-4 col-md-offset-4">
			          	<?php echo form_submit('submit', 'Add New Class', 'class="btn btn-primary btn-block"'); ?>
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
