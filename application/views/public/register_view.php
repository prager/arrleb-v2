<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row d-flex align-items-center flex-wrap">
   <div class="col-md-7">
    <h1 class="h2">New User Registration</h1>
    </div>
     <div class="col-md-5">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl', 'Home');?></li>
       <li class="breadcrumb-item active">New User</li>
      </ul>
     </div>
    </div>
  </div>
</div>

<div id="content">
        <div class="container">
            <?php if($msg != '') {?>
            <div class="row">
              <div class="col text-center">
                <p><?php echo $msg; ?></p>
              </div>
            </div>
            <?php }?>
            <div class="row">
                    <div class="col-md-12">
                    <div class="box">                                   
                <?php echo form_open('public_ctl/send_reg/'); ?>
                <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                    <div class="form-group">
                    	<?php $data = array(
							'name'          => 'fname',
							'id'            => 'fname',
			            	'value'         =>  $fname,
			            	'placeholder' => 'First Name',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                        <label for="name-login">* First Name</label>
                        <?php echo form_input($data);?>
                    </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'lname',
							'id'            => 'lname',
			            	'value'         =>  $lname,
			            	'placeholder' => 'First Name',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                        <label for="name-login">* Last Name</label>
                        <?php echo form_input($data);?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3 col-md-offset-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'email',
							'id'            => 'email',
			            	'value'         =>  $email,
			            	'placeholder' => 'Email',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                          <label for="name-login">* Email</label>
                          <?php echo form_input($data);?>
                      </div>
                      </div>
                          <div class="col-md-3">
                          <div class="form-group">
                      <?php $data = array(
							'name'          => 'callsign',
							'id'            => 'callsign',
			            	'value'         =>  $callsign,
			            	'placeholder' => 'Callsign',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                              <label for="name-login">Call Sign</label>
                              <?php echo form_input($data);?>
                          </div>
                          </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5 col-md-offset-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'phone',
							'id'            => 'phone',
			            	'value'         =>  $phone,
			            	'placeholder' => 'Phone Number',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                          <label for="name-login">* Phone Number</label>
                          <?php echo form_input($data);?>
                      </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5 col-md-offset-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'street',
							'id'            => 'street',
			            	'value'         =>  $street,
			            	'placeholder' => 'Street Address',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                          <label for="name-login">* Street Address</label>
                          <?php echo form_input($data);?>
                      </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5 col-md-offset-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'city',
							'id'            => 'city',
			            	'value'         =>  $city,
			            	'placeholder' => 'City',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                          <label for="name-login">* City</label>
                          <?php echo form_input($data);?>
                      </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-3 col-md-offset-3">
                      <div class="form-group">
                          <label for="name-login">* State</label>
                          <?php echo form_dropdown('state', $this->data_lib->get_states_array(), $state,
			          			'class="form-control"'); ?>
                      </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                      <?php $data = array(
							'name'          => 'zip',
							'id'            => 'zip',
			            	'value'         =>  $zip,
			            	'placeholder' => 'Zip Code',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                          <label for="name-login">* Zip Code</label>
                          <?php echo form_input($data);?>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                    <div class="form-group">
                    	<?php $data = array(
							'name'          => 'facebook',
							'id'            => 'facebook',
			            	'value'         =>  $facebook,
			            	'placeholder' => 'Facebook URL',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                        <label for="name-login">Facebook URL</label>
                        <?php echo form_input($data);?>
                    </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'twitter',
							'id'            => 'twitter',
			            	'value'         =>  $twitter,
			            	'placeholder' => 'Twitter URL',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                        <label for="name-login">Twitter URL</label>
                        <?php echo form_input($data);?>
                      </div>
                    </div>
                  </div>


                    <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                    <div class="form-group">
                    	<?php $data = array(
							'name'          => 'linkedin',
							'id'            => 'linkedin',
                    	    'value'         =>  $linkedin,
			            	'placeholder' => 'LinkedIn URL',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                        <label for="name-login">LinkedIn URL</label>
                        <?php echo form_input($data);?>
                    </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                      <?php $data = array(
							'name'          => 'googleplus',
							'id'            => 'googleplus',
                          'value'         =>  $googleplus,
			            	'placeholder' => 'Google+ URL',
			                'class'			=> 'form-control',
							'maxlength'     => '75');?>
                        <label for="name-login">Google+ URL</label>
                        <?php echo form_input($data);?>
                      </div>
                    </div>
                  </div>


                    <div class="row">
                      <div class="col-md-6 col-md-offset-3">
                      <p class="small">(*) is required </p>
                      </div>
                  </div>

                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                          <br>
                          <div class="text-center">
                              <button type="submit" class="btn btn-template-primary"><i class="fa fa-user-md"></i>Send Registration &nbsp;</button>
                          </div>
                          <br>
                        </div>
                    </div>

                </form>

                <!-- /.row -->
              </div>
              </div>
          </div>
        </div>
      </div>
