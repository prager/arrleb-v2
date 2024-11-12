<?php //echo base_url(). $staff[0]['image_loc']; ?>

<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Our team</h1>
                    </div>
                    <div class="col-md-5">
                      <ul class="breadcrumb">
                        <li><?php echo anchor('Public_ctl', 'Home');?></li>
                        <li>Our team</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading text-center">
                                <h2>ARRL East Bay Section Team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-md-offset-1">
                          <div class="team-member" data-animate="fadeInUp">
                              <div class="image">
                                  <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[0]['id_user']; ?>">
                                      <img src="<?php echo base_url(). $staff[0]['image_loc']; ?>" alt="" class="img-responsive img-circle">
                                  </a>
                              </div>
                              <h3><?php echo anchor('user/show_user/' . $staff[0]['id_user'],
                                  $staff[0]['fname'] . ' ' . $staff[0]['lname'] . ', ' . $staff[0]['callsign']); ?></h3>
                              <p class="role"><?php echo $staff[0]['position']?></p>
                              <div class="social">
                            <?php if($staff[0]['facebook'] != '') {?>
                              <a href="<?php echo $staff[0]['facebook']; ?>" class="external facebook" data-animate-hover="pulse">
                              <i class="fa fa-facebook"></i></a>
                              <?php }
                              if($staff[0]['googleplus'] != '') {?>
                              <a href="<?php echo $staff[0]['googleplus']; ?>" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                              <?php }
                              if( $staff[0]['twitter'] != '') {?>
                              <a href="<?php echo $staff[0]['twitter']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                              <?php }
                              if($staff[0]['linkedin'] != '') {?>
                              <a href="<?php echo $staff[0]['linkedin']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-linkedin"></i></a>
                              <?php }
                              if(($staff[0]['linkedin'] == '') || ($staff[0]['facebook'] == '') || ($staff[0]['twitter'] == '')
                                  || ($staff[0]['googleplus'] == '')) {
                                  //echo '--------------';
                              }?>
                            </div>
                              <div class="text">
                                  <p><?php echo $staff[0]['narrative']; ?></p>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                          <div class="team-member" data-animate="fadeInUp">
                              <div class="image">
                                  <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[1]['id_user']; ?>">
                                      <img src="<?php echo base_url(). $staff[1]['image_loc']; ?>" alt="" class="img-responsive img-circle">
                                  </a>
                              </div>
                              <h3><?php echo anchor('user/show_user/' . $staff[1]['id_user'],
                                  $staff[0]['fname'] . ' ' . $staff[1]['lname'] . ', ' . $staff[1]['callsign']); ?></h3>
                              <p class="role"><?php echo $staff[1]['position']?></p>
                              <div class="social">
                            <?php if($staff[0]['facebook'] != '') {?>
                              <a href="<?php echo $staff[1]['facebook']; ?>" class="external facebook" data-animate-hover="pulse">
                              <i class="fa fa-facebook"></i></a>
                              <?php }
                              if($staff[1]['googleplus'] != '') {?>
                              <a href="<?php echo $staff[1]['googleplus']; ?>" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                              <?php }
                              if( $staff[1]['twitter'] != '') {?>
                              <a href="<?php echo $staff[1]['twitter']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                              <?php }
                              if($staff[1]['linkedin'] != '') {?>
                              <a href="<?php echo $staff[1]['linkedin']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-linkedin"></i></a>
                              <?php }
                              if(($staff[1]['linkedin'] == '') || ($staff[1]['facebook'] == '') || ($staff[1]['twitter'] == '')
                                  || ($staff[1]['googleplus'] == '')) {
                                  //echo '--------------';
                              }?>
                            </div>
                              <div class="text">
                                  <p><?php echo $staff[1]['narrative']; ?></p>
                              </div>
                          </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[1]['id_user']; ?>">
                                        <img src="<?php echo base_url(). $staff[2]['image_loc']; ?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><?php echo anchor('user/show_user/' . $staff[2]['id_user'],
                                    $staff[2]['fname'] . ' ' . $staff[2]['lname'] . ', ' . $staff[2]['callsign']); ?></h3>
                                <p class="role">Assitant Section Manager</p>
                                <div class="social">
                            	<?php if($staff[2]['facebook'] != '') {?>
                                <a href="<?php echo $staff[2]['facebook']; ?>" class="external facebook" data-animate-hover="pulse">
                                <i class="fa fa-facebook"></i></a>
                                <?php }
                                if($staff[2]['googleplus'] != '') {?>
                                <a href="<?php echo $staff[2]['googleplus']; ?>" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <?php }
                                if( $staff[2]['twitter'] != '') {?>
                                <a href="<?php echo $staff[2]['twitter']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <?php }
                                if($staff[2]['linkedin'] != '') {?>
                                <a href="<?php echo $staff[2]['linkedin']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-linkedin"></i></a>
                                <?php }
                                else {
                                    //echo '--------------';
                                }?>
                            	</div>
                                <div class="text">
                                    <p><?php echo $staff[2]['narrative']; ?></p>
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-2 col-md-offset-1 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[3]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[3]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[3]['id_user']; ?>">
                                <?php echo $staff[3]['fname'] . ' ' . $staff[3]['lname'] . ' ' . $staff[3]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[3]['position']?></p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[7]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[7]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[7]['id_user']; ?>">
                                <?php echo $staff[7]['fname'] . ' ' . $staff[7]['lname'] . ' ' . $staff[7]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[7]['position']?></p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[8]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[8]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[8]['id_user']; ?>">
                                <?php echo $staff[8]['fname'] . ' ' . $staff[8]['lname'] . ' ' . $staff[8]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[8]['position']?></p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[9]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[9]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[9]['id_user']; ?>">
                                <?php echo $staff[9]['fname'] . ' ' . $staff[9]['lname'] . ' ' . $staff[9]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[9]['position']?></p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[11]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[11]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[11]['id_user']; ?>">
                                <?php echo $staff[11]['fname'] . ' ' . $staff[11]['lname'] . ' ' . $staff[11]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[11]['position']?></p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                    </div>

                    <!--<div class="row">
                        <div class="col-md-2 col-md-offset-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member" data-animate="fadeInDown">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[7]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[7]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[7]['id_user']; ?>">
                                <?php echo $staff[7]['fname'] . ' ' . $staff[7]['lname'] . ' ' . $staff[7]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[7]['position']?></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member" data-animate="fadeInDown">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[8]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[8]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[8]['id_user']; ?>">
                                <?php echo $staff[8]['fname'] . ' ' . $staff[8]['lname'] . ' ' . $staff[8]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[8]['position']?></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member" data-animate="fadeInDown">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[9]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[9]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[9]['id_user']; ?>">
                                <?php echo $staff[9]['fname'] . ' ' . $staff[9]['lname'] . ' ' . $staff[9]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[9]['position']?></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[10]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[10]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[10]['id_user']; ?>">
                                <?php echo $staff[10]['fname'] . ' ' . $staff[10]['lname'] . ' ' . $staff[10]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[10]['position']?></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3" data-animate="fadeInDown">
                            <div class="team-member">
                                <div class="image">
                                    <a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[11]['id_user']; ?>">
                                        <img src="<?php echo base_url() . $staff[11]['image_loc'] ;?>" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="<?php echo base_url() . 'index.php/user/show_user/' . $staff[11]['id_user']; ?>">
                                <?php echo $staff[11]['fname'] . ' ' . $staff[11]['lname'] . ' ' . $staff[11]['callsign']?></a></h3>
                                <p class="role"><?php echo $staff[11]['position']?></p>
                            </div>-->
                            <!-- /.team-member -->
                        </div>
                    </div>-->


                    </div>
                    <!-- /.row -->

                </section>

            </div>
