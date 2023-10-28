
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo $fname . ' ' . $lname . ' ' . $callsign; ?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><?php echo $home_pg; ?></li>
                            <li><?php echo $fname . ' ' . $lname?></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="team-member-detail">
            <div class="container">
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>About <?php echo $fname; ?></h2>
                            </div>
                            <p class="lead">
							<?php 
							if($narrative == '') {
							    echo 'Member didn\'t enter any headline';
							}
							else {
							    echo $narrative;
							}
							?>
							
							</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <?php 
							if($narrative2 == '') {
							    echo 'Member didn\'t enter any narrative<br><br><br><br>';
							}
							else {
							    echo nl2br($narrative2, FALSE);
							}
							if($cnt > 0) {
							    
							?>
							<br><br>							
							<?php if($cnt > 0) {?>
                            <div class="heading">
                                <h3><?php echo $fname; ?>'s Lectures</h3>
                            </div>
							
                            <ul class="ul-icons">
                            <?php foreach($topics as $row) {?>
                                <li><i class="fa fa-check"></i><?php echo anchor('speaker/show_lecture/' . $row['id_lecture'], $row['subject']); ?></li>
                            <?php }?>
                            </ul>
                            <?php }
							}?>
                        </div>

                        <div class="col-md-4">
                            <img class="img-responsive img-circle" alt="" 
                            src="<?php echo base_url() . $image_loc ;?>">
                        </div>
                    </div>
                </section>
                
                <section>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="heading">
                                <h3>Get in touch</h3>
                            </div>

                            <div class="social">
                            	<?php if($facebook != '') {?>
                                <a href="<?php echo $facebook; ?>" class="external facebook" data-animate-hover="pulse">
                                <i class="fa fa-facebook"></i></a>
                                <?php }
                                    if($googleplus != '') {?>
                                <a href="<?php echo $googleplus; ?>" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <?php }
                                    if($twitter != '') {?>
                                <a href="<?php echo $twitter; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <?php }
                                    if($linkedin != '') {?>
                                <a href="<?php echo $linkedin?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-linkedin"></i></a>
                                <?php }?>
                                <a href="mailto:<?php echo $email; ?>" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>
                            	<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </div>

                        <div class="col-md-4">
							<div class="heading">
                                <h3><?php echo $fname; ?>'s Address</h3>
                            </div>
                            	<?php echo $street; ?><br>
                            	<?php echo $city . ' ' . $state . ' ' . $zip; ?><br>
						</div>
                        <div class="col-md-4">
							<div class="heading">
                                <h3><?php echo $fname; ?>'s Phone</h3>
                            </div>	
                            <?php echo $phone; ?>					
						</div>
                    </div>
                    
                </section>
            </div>
            <!-- /.container -->


        </div>
        <!-- /#content -->