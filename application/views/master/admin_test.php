<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Ham Radio Testing</h3>
  	</div>
  </div>
  <div class="row d-flex align-items-center flex-wrap">
     <div class="col-md-12">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/technician', 'Technician'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/General', 'General'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/extra', 'Extra'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/inday', 'Ham in a Day'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/elmer', 'Elmer'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/onair', 'Getting on the Air'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/emergency', 'Emergency Preparedness'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/auxiliary', 'Auxiliary'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/speakers', 'Speakers'); ?></li>
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
                    <div class="heading">
                        <h2>Exam Sessions</h2>
                    </div>
                    <p class="lead">Exam sessions are conducted by volunteers working under the direction of the FCC and a Volunteer Exam Coordinator (VEC).
                 		There will likely be a charge for taking the exam. The exam fee is set by the VEC and is usually $15 or less. Click on an image
                    below for an exam session details that was organized by <a href="http://mdarc.org">MDARC</a> on June 11, 2020.</p>
                </div>
            </div>

            <div class="row portfolio no-space">

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="<?php echo base_url() ;?>assets/img/ps1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Exam Session on June 11th, 2020</a></h3>
                        </div>
                        <div class="text">
                            <p class="hidden-sm">See a few photos and details about the above mentioned exam session</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="<?php echo base_url() ;?>assets/img/ps2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Exam Session on June 11th, 2020</a></h3>
                        </div>
                        <div class="text">
                            <p class="hidden-sm">See a few photos and details about the above mentioned exam session</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="<?php echo base_url() ;?>assets/img/ps3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Exam Session on June 11th, 2020n</a></h3>
                        </div>
                        <div class="text">
                            <p class="hidden-sm">See a few photos and details about the above mentioned exam session</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>
            </div>
        </section>


        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Future Exam Sessions</h2>
                </div>

            </div>
        </div>

        <div class="row">
        	<div class="col-md-12">
        		<table class="table table-striped table-responsive">
         		<thead>
         			<tr>
         				<th>Testing Event</th>
         				<th>Test Date</th>
         				<th>Fee</th>
         				<th>Location</th>
         				<th>View Details</th>
         			</tr>
         		</thead>
         		<tbody>
         		<?php if($cnt > 0)
         		    foreach($tests as $row) {?>
         			<tr>
         				<td><strong><?php echo $row['course']; ?></strong></td>
         				<td><?php echo date("m/d/Y", $row['date_to']); ?></td>
         				<td><?php setlocale(LC_MONETARY, 'en_US.utf8');
                             echo money_format('%(#10n', $row['fee']);?></td>
         				<td class="elips1"><?php echo $row['location']; ?></td>
         				<td><?php echo anchor('Public_ctl/test_details/' . $row['id'], 'View'); ?></td>
         			</tr>
         			<?php }
         			else {?>
         			<tr>
         				<td colspan="5">No testing on schedule</td>
         			</tr>
         			<?php }?>
         		</tbody>
         	</table>
        </div>
      </div>

        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>What You Need to Know</h2>
                </div>
                <p class="lead">Contact the
                exam session administrator to determine the fee that applies to the exam session you plan to attend, the documents required
                and to verify the session date and time. VEC organizations may have different policies regarding candidate procedures and requirements.
                The FCC does not charge a fee to issue an initial license or for standard changes to a license. However, there may be fees for other FCC
                services.</p>
            </div>
        </div>
    </div>
</div>
    <!-- /.container -->
</div>
        <!-- /#content -->
