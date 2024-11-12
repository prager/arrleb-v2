<!-- *** LOGIN MODAL *** -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">User login</h4>
                        <small class="text-danger">Only for Authorized Staff Members</small>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('Login'); ?>
                            <div class="form-group">
                                <?php
			                     $num_yrs = array(
								        'name'          => 'user',
								        'id'            => 'user',
								        'value'         => '',
								        'maxlength'     => '100',
								        'size'          => '50',
			                     		'class'			=> 'form-control',
			                     		'placeholder' => 'User ID'
			                     );?>
			                     <span style="color: red;"><?php echo form_error('user'); ?></span>
			                     <?php echo form_input($num_yrs); ?>
                            </div>
                            <div class="form-group">
                                <?php $num_yrs = array(
								        'name'          => 'pass',
								        'id'            => 'pass',
								        'value'         => '',
								        'maxlength'     => '100',
								        'size'          => '50',
                                		'class'			=> 'form-control',
                                		'placeholder' => 'Password'
			                     );?>
			                     <span style="color: red;"><?php echo form_error('pass'); ?></span>
                     			<?php echo form_password($num_yrs);?>
                     			<!-- <span style="font-size: 0.85em;">Request Guest access <?php echo anchor('home/contact', 'here'); ?></span> -->
                            </div>

                            <p class="text-center">
                                <!-- <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button> -->
                                 <?php  echo form_submit('submit', 'Log In', 'class="btn btn-template-main"');
									echo form_close(); ?>
                            </p>

                        </form>

                        <p class="text-center text-muted">Forgot or need to change password? Click
                        <?php echo anchor('public_ctl/reset_password', '<strong>here</strong>')?></p>
                       <!-- <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>!
                          It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                        -->
                    </div>
                </div>
            </div>
        </div>

<!-- *** LOGIN MODAL END *** -->
