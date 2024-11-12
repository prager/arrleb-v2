<div class="modal fade" id="lostUsername" role="dialog">
		    <div class="modal-dialog">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-pencil"></span> Lost Username</h4>
		        </div>
		        <div class="modal-body">
		        <?php 
		        echo form_close(); 
		        echo form_open('public_ctl/lost_username/'); ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-8 col-md-offset-2">
			            <div class="form-group">
        			            <?php $data = array(
							'name'          => 'email',
							'id'            => 'email',
			            	'value'         =>  '',
			            	'placeholder' => 'Email',
			                'class'			=> 'form-control',
							'maxlength'     => '65');?>
						<label>Email to Send Username Request</label><br>
						<?php echo form_input($data);?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
			          	<?php echo form_submit('submit', 'Send Request', 'class="btn btn-block"'); ?>
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