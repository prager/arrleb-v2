<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row d-flex align-items-center flex-wrap">
   <div class="col-md-7">
    <h1 class="h2">Password Reset</h1>
    </div>
     <div class="col-md-5">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl', 'Home');?></li>
       <li class="breadcrumb-item active">Password Reset</li>
      </ul>
     </div>
    </div>
  </div>
</div>
<div id="content">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                    <div class="box">
		        <?php echo form_open('public_ctl/load_forgot_password/'); ?>
		            <div class="row">
                        <div class="col-md-4 col-md-offset-3">
                            <div class="form-group">
        			            <?php $data = array(
							'name'          => 'email',
							'id'            => 'email',
			            	'value'         =>  '',
			            	'placeholder' => 'Email',
			                'class'			=> 'form-control',
							'maxlength'     => '35');?>
						Email
						<?php echo form_input($data);?>
        					</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-3">
                            <div class="form-group">	
        			            <?php $data = array(
							'name'          => 'pass1',
							'id'            => 'pass1',
			            	'value'         =>  '',
			            	'placeholder' => 'password',
			               'class'			=> 'form-control',
							'maxlength'     => '75');?>
						New Password
						<?php echo form_password($data);?>
        					</div>
                        </div>
                    </div>					
                    <div class="row">
                        <div class="col-md-4 col-md-offset-3">
                            <div class="form-group">	
        			            <?php $data = array(
							'name'          => 'pass2',
							'id'            => 'pass2',
			            	'value'         =>  '',
			            	'placeholder' => 'password',
			               'class'			=> 'form-control',
							'maxlength'     => '75');?>
						Confirm Password
						<?php echo form_password($data);?>
						<small>Lost your username? Click <a href="#" data-toggle="modal" data-target="#lostUsername">here</a></small>
						<?php include 'inc_lost_username_modal.php'; ?>
        					</div>
                        </div>
                    </div>					
                    <div class="row">
                        <div class="col-md-3 col-md-offset-3">
                            <div class="form-group">	
        			          	<?php echo form_submit('submit', 'Submit', 'class="btn btn-template-primary"'); 
        			          	      echo form_close(); ?>
        					</div>
                        </div>
                    </div>
                    </div>
              </div>
          </div>
        </div>
      </div>			
			          	