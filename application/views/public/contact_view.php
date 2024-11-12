        <div id="heading-breadcrumbs" class="no-mb">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><?php echo anchor('Public_ctl', 'Home');?></li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <section>

            <div id="map" class="with-border">
				<div id="googleMap" style="height: 310px;">&nbsp;</div>
					<script>
					function myMap() {
					var myCenter = new google.maps.LatLng(37.8942182873016, -122.0753281957829);
					var mapProp = {center:myCenter, zoom:9, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
					var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
					var marker = new google.maps.Marker({position:myCenter});
					marker.setMap(map);
					}
					</script>
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeOLEmQMnt6O2kEXJ7llYr1xw2y-BEm6M&callback=myMap"></script>
            </div>

        </section>

        <div id="content">
            <div class="container" id="contact">

                <section>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="heading">
                                <h3>Contact form</h3>
                            </div>

                            <?php echo form_open('public_ctl/msg');?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        	<label for="firstname">First Name</label>
                                            <?php $name_arr = array(
												'name'  => 'fname',
												'id' => 'fname',
												'value' => $fname,
												'maxlength' => '50',
												'size' => '50',
								                'class'	=> 'form-control',
								       			'placeholder' => 'First Name');?>
								        	<span style="color: red;"><?php echo form_error('name'); ?></span>
								        	<?php echo form_input($name_arr); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <?php $name_arr = array(
												'name'  => 'lname',
												'id' => 'lname',
												'value' => $lname,
												'maxlength' => '50',
												'size' => '50',
								                'class'	=> 'form-control',
								       			'placeholder' => 'Last Name');?>
								        	<span style="color: red;"><?php echo form_error('name'); ?></span>
								        	<?php echo form_input($name_arr); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <?php $email_arr = array(
												'name'  => 'email',
												'id' => 'email',
												'value' => $email,
												'maxlength' => '50',
												'size' => '50',
								                'class'	=> 'form-control',
								         		'placeholder' => 'Email');?>
								          	<span style="color: red;"><?php echo form_error('email'); ?></span>
								          	<?php echo form_input($email_arr); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <?php $subj_arr = array(
												'name'  => 'subj',
												'id' => 'subj',
												'value' => $subject,
												'maxlength' => '50',
												'size' => '50',
								                'class'	=> 'form-control',
								         		'placeholder' => 'Subject');?>
								            <span style="color: red;"><?php echo form_error('subj'); ?></span>
								            <?php echo form_input($subj_arr); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <?php $text_arr = array(
													'name'  => 'msg',
													'id' => 'msg',
													'value' => $msg,
													'rows' => '5',
									                'class'	=> 'form-control',
									      			'placeholder' => 'Message');?>
									      <span style="color: red;"><?php echo form_error('msg'); ?></span>
									      <?php echo form_textarea($text_arr); ?>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                      <br>
										<?php echo form_submit('submit', 'Send Message', 'class="btn btn-template-main"');?>
                                    </div>
                                </div>
                                <!-- /.row -->
                            <?php echo form_close();?>
                        </div>

                        <div class="col-md-4">&nbsp;</div>

                    </div>


                </section>

            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->
