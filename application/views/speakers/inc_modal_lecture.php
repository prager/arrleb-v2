<!-- Edit Lecture Modal -->
		  <div class="modal fade" id="addLecture" role="dialog">
		    <div class="modal-dialog modal-lg">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-pencil"></span> Add a Lecture</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('speaker/edit_lecture/0'); ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-10 col-md-offset-1">
			            <?php $data = array(
							'name'          => 'topic_name',
							'id'            => 'topic_name',
			            		'value'         =>  '',
			            	'placeholder' => 'Subject',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
						Subject
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
			            	'placeholder' => 'Location',
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
							'name'          => 'topic_ref',
							'id'            => 'topic_ref',
			            		'value'         =>  '',
			            	'placeholder' => 'Reference',
			                'class'			=> 'form-control',
							'maxlength'     => '1024');?>
						Reference
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
						<?php $data = array(
							'name'          => 'date',
							'id'            => 'date',
						    'value'         =>  '',
						    'type' => 'date',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Date
						<?php echo form_input($data);?>
						</div>	
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						
								<?php 
                                    $data = array(
                                        'name' => 'topic_text',
                                        'id' => 'topic_text',
                                        'value' => '',
                                        'cols' => 150,
                                        'rows' => 6,
                                        'class' => 'form-control'
                                    );
                                ?>
                                Lecture Summary
                                <?php echo form_textarea($data);
                                ?>
						
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
					<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">
			          	<?php echo form_submit('submit', 'Submit Lecture', 'class="btn btn-primary btn-block"'); ?>
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
		    