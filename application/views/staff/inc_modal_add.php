<!-- Edit Class Modal -->
		  <div class="modal fade" id="addPos" role="dialog">
		    <div class="modal-dialog">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-copy"></span> Add Staff Position</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('staff/edit_class/'); ?>
		            <div class="form-group">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
						<?php $data = array(
							'name'          => 'pos_name',
							'id'            => 'pos_name',
			            		'value'         =>  '',
			            	'placeholder' => 'Position Name',
			                'class'			=> 'form-control',
							'maxlength'     => '128');?>
						Position Name
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
			          	<?php echo form_submit('submit', 'Add Staff Position', 'class="btn btn-primary btn-block"'); ?>
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
