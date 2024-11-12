<div class="modal fade" id="setProfile<?php echo $row['id_user']; ?>" role="dialog">
		    <div class="modal-dialog">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">×</button>
		          <h4><span class="glyphicon glyphicon-pencil"></span> Set User Profile</h4>
		        </div>
		        <div class="modal-body">
		        <?php echo form_open('master/load_user_profile/' .  $row['id_user']) ?>
		            <div class="form-group">
		            <div class="row">
			            <div class="col-md-8 col-md-offset-1">
							<?php echo $row['fname'] . ' ' . $row['lname']; ?>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col-md-1 col-md-offset-1">												
						<?php
					   
	                   if(is_numeric(strpos($row['profile_str'], "1"))) {
						    $checked = TRUE;
						}
						else {
						    $checked = FALSE;
						}
						
						$data = array(
						    'name'          => 'edu',
						    'id'            => 'edu',
						    'value'         => 'accept',
						    'checked'       => $checked,
						    'style'         => 'margin:10px'
						);
						?>
						Edu
						<?php echo form_checkbox($data); ?>
						</div>
						
						<div class="col-md-1">												
						<?php
					   
	                   if(is_numeric(strpos($row['profile_str'], "2"))) {
						    $checked = TRUE;
						}
						else {
						    $checked = FALSE;
						}
						
						$data = array(
						    'name'          => 'events',
						    'id'            => 'events',
						    'value'         => 'accept',
						    'checked'       => $checked,
						    'style'         => 'margin:10px'
						);
						?>
						Evt
						<?php echo form_checkbox($data); ?>
						</div>
						
						<div class="col-md-1">												
						<?php
					   
	                   if(is_numeric(strpos($row['profile_str'], "5"))) {
						    $checked = TRUE;
						}
						else {
						    $checked = FALSE;
						}
						
						$data = array(
						    'name'          => 'clb',
						    'id'            => 'clb',
						    'value'         => 'accept',
						    'checked'       => $checked,
						    'style'         => 'margin:10px'
						);
						?>
						Clb
						<?php echo form_checkbox($data); ?>
						</div>
						
						<div class="col-md-1">												
						<?php
					   
	                   if(is_numeric(strpos($row['profile_str'], "3"))) {
						    $checked = TRUE;
						}
						else {
						    $checked = FALSE;
						}
						
						$data = array(
						    'name'          => 'spk',
						    'id'            => 'spk',
						    'value'         => 'accept',
						    'checked'       => $checked,
						    'style'         => 'margin:10px'
						);
						?>
						Spk
						<?php echo form_checkbox($data); ?>
						</div>
						
						<div class="col-md-1">												
						<?php
					   
	                   if(is_numeric(strpos($row['profile_str'], "6"))) {
						    $checked = TRUE;
						}
						else {
						    $checked = FALSE;
						}
						
						$data = array(
						    'name'          => 'elm',
						    'id'            => 'elm',
						    'value'         => 'accept',
						    'checked'       => $checked,
						    'style'         => 'margin:10px'
						);
						?>
						Elm
						<?php echo form_checkbox($data); ?>
						</div>
						
						<div class="col-md-1">												
						<?php
					   
	                   if(is_numeric(strpos($row['profile_str'], "99"))) {
						    $checked = TRUE;
						}
						else {
						    $checked = FALSE;
						}
						
						$data = array(
						    'name'          => 'mst',
						    'id'            => 'mst',
						    'value'         => 'accept',
						    'checked'       => $checked,
						    'style'         => 'margin:10px'
						);
						?>
						Mst
						<?php echo form_checkbox($data); ?>
						</div>
						
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">&nbsp;</div>
					<div class="row">
					<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">
			          	<?php echo form_submit('submit', 'Submit Changes', 'class="btn btn-block"'); ?>
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