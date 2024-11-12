<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>User Info</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><?php echo anchor('login/load_user', 'User Page');?></li>
                            <li>User Info</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
<?php if($msg != NULL) {?>
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
		<p style="color: red;"><?php echo $msg; ?></p>
		</div>
	</div>
<?php }?>
<?php echo form_open('User/set_user/' . $id); ?>
	<div class="row">
			<div class="col-md-4 col-md-offset-2">
    			<?php $data = array(
    			'name'          => 'username',
    		    'id'            => 'username',
    			'value'     =>  $username,
    			'placeholder' => 'username',
    			'class'			=> 'form-control',
    			'maxlength'     => '75');?>
    			Username
    		<?php echo form_input($data);?>
		</div>
		<div class="col-md-4">
			<?php $data = array(
				'name'          => 'callsign',
				'id'            => 'callsign',
			    'value'         =>  $callsign,
			    'placeholder' => 'callsign',
			    'class'			=> 'form-control',
				'maxlength'     => '35');?>
			Callsign
			<?php echo form_input($data);?>
		</div>	
	</div>
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<?php $data = array(
				'name'          => 'fname',
				'id'            => 'fname',
			    'value'         =>  $fname,
			    'placeholder' => 'First Name',
			    'class'			=> 'form-control',
				'maxlength'     => '75');?>
				First Name
			<?php echo form_input($data);?>
		</div>
			<div class="col-md-4">
    			<?php $data = array(
    			'name'          => 'lname',
    		    'id'            => 'lname',
    			'value'     =>  $lname,
    			'placeholder' => 'Last Name',
    			'class'			=> 'form-control',
    			'maxlength'     => '75');?>
    			Last Name
    		<?php echo form_input($data);?>
		</div>		
	</div>
	<div class="row">&nbsp;</div>
	<div class="row">
    	<div class="col-md-4 col-md-offset-2">
    		<?php $data = array(
    			'name'          => 'street',
    			'id'            => 'street',
    			'value'         =>  $street,
    			'placeholder' => 'Street',
    			'class'			=> 'form-control',
    			'maxlength'     => '35');?>
    		Street
    		<?php echo form_input($data);?>
    	</div>
    	<div class="col-md-4">
    		<?php $data = array(
    			'name'          => 'city',
    			'id'            => 'city',
    			 'value'         =>  $city,
    			 'placeholder' => 'City',
    			 'class'			=> 'form-control',
    			 'maxlength'     => '35');?>
    		City
    		<?php echo form_input($data);?>
    	</div>
    </div>
	<div class="row">&nbsp;</div>
	<div class="row">
    	<div class="col-md-4 col-md-offset-2">
			State
			<?php echo form_dropdown('state', $this->fill_arrays->get_states_array(), $state, 
			     'class="form-control"'); ?>
		</div>
		<div class="col-md-4">
			<?php $data = array(
				'name'          => 'zip',
				'id'            => 'zip',
			    'value'         =>  $zip,
			    'placeholder' => 'Zip',
			    'class'			=> 'form-control',
				'maxlength'     => '10');?>
			Zip
			<?php echo form_input($data);?>
		</div>
	</div>
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<?php $data = array(
				    'name'          => 'phone',
					'id'            => 'phone',
			        'value'         =>  $phone,
			        'placeholder' => 'Phone',
			        'class'			=> 'form-control',
					'maxlength'     => '35');?>
			Phone
			<?php echo form_input($data);?>
		</div>
		<div class="col-md-4">
			<?php $data = array(
				'name'          => 'email',
				'id'            => 'email',
			    'value'         =>  $email,
			    'placeholder' => 'Email',
			    'class'			=> 'form-control',
				'maxlength'     => '35');?>
			Email
			<?php echo form_input($data);?>
		</div>
	</div>
	
	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<?php $data = array(
				    'name'          => 'facebook',
					'id'            => 'facebook',
			        'value'         =>  $facebook,
			        'placeholder' => 'Facebook URL',
			        'class'			=> 'form-control',
					'maxlength'     => '35');?>
			Facebook URL
			<?php echo form_input($data);?>
		</div>
		<div class="col-md-4">
			<?php $data = array(
				'name'          => 'twitter',
				'id'            => 'twitter',
			    'value'         =>  $twitter,
			    'placeholder' => 'Twitter URL',
			    'class'			=> 'form-control',
				'maxlength'     => '35');?>
			Twitter URL
			<?php echo form_input($data);?>
		</div>
	</div>
	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-2">
			<?php $data = array(
				    'name'          => 'linkedin',
					'id'            => 'linkedin',
			        'value'         =>  $linkedin,
			        'placeholder' => 'LinkedIn URL',
			        'class'			=> 'form-control',
					'maxlength'     => '35');?>
			LinkedIn URL
			<?php echo form_input($data);?>
		</div>
		<div class="col-md-4">
			<?php $data = array(
				'name'          => 'googleplus',
				'id'            => 'googleplus',
			    'value'         =>  $googleplus,
			    'placeholder' => 'Google+ URL',
			    'class'			=> 'form-control',
				'maxlength'     => '35');?>
			Google+ URL
			<?php echo form_input($data);?>
		</div>
	</div>
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h5 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" 
                aria-expanded="false" aria-controls="collapseThree">
                  Member Main Headline
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <?php 
                    $data = array(
                        'name' => 'narrative',
                        'id' => 'narrative',
                        'value' => $narrative,
                        'cols' => 150,
                        'rows' => 7,
                        'class' => 'form-control'
                    );
                echo form_textarea($data);
                ?>
			  </div>
            </div>
          </div>
          
           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" 
                aria-controls="collapseTwo">
                  Member Narrative
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
         		<?php 
                    $data = array(
                        'name' => 'narrative2',
                        'id' => 'narrative2',
                        'value' => $narrative2,
                        'cols' => 150,
                        'rows' => 7,
                        'class' => 'form-control'
                    );
                echo form_textarea($data);
                ?>
      		</div>
    		</div>
  			</div>
          
		</div>
		</div>
	</div>
	
	
	
	<div class="row">&nbsp;</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php  echo form_submit('submit', 'Submit', 'class="btn btn-template-main btn-block"');		
				   echo form_close(); ?>
		</div>
	</div>
	<div class="row">&nbsp;</div>
	<div class="row">&nbsp;</div>
</div>