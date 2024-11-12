<!-- Upload File Modal -->
		  <div class="modal fade" id="uploadPrivate" role="dialog">
		    <div class="modal-dialog  modal-sm">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal"> × </button>
		          <h4><span class="glyphicon glyphicon-remove-sign"></span> Delete File</h4>
		        </div>
		        <div class="modal-body">
    		    <?php echo form_open('edu/edit_class/' .  $row['id']); ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-10 col-md-offset-1">
			            <?php $data = array(
							'name'          => 'desc',
							'id'            => 'desc',
			            	'value'         =>  '',
			            	'placeholder' => 'File Description',
			                'class'			=> 'form-control',
							'maxlength'     => '512');?>
						Course
						<?php echo form_input($data);?>
						</div>						
					</div>
				    <div class="row">&nbsp;</div>				    
		   </div>
		 </div>
		 </div>
		 </div>