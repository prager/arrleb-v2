
<div id="heading-breadcrumbs">
 <div class="container align-items-center ">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Education & Training</h3>
  	</div>
  </div>
  <div class="row d-flex flex-wrap">
     <div class="col-md-12">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/technician', 'Technician'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/general', 'General'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/extra', 'Extra'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/inday', 'Ham in a Day'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/testing', 'License Testing'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/elmer', 'Elmer'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/onair', 'Get on the Air'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/emergency', 'Emergency Prepare'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/auxiliary', 'Auxiliary'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/speakers', 'Speakers'); ?></li>
      </ul>
     </div>
    </div>
  </div>
</div>

<div id="content">
        <div class="container">
        	
        	<div class="row">
        	<div class="col-md-7">
        	<p>Welcome to the updated The ARRL East Bay Section Education and Training website. This category of the ARRL East 
        	Bay Section is purpose driven with a prominent banner that provides easy access to the education and training topics which 
        	interest you.</p>
        	<hr>
        	<h5>Vision for the ARRL East Bay Section Education and Training website</h5>
        	<p>The ARRL East Bay Section Education and Training website shall become a repository of amateur radio education and training.</p>
        	<hr>
        	<h5>Mission for the ARRL East Bay Section Education and Training website</h5>
        	<p>The ARRL East Bay Section believes that amateur radio clubs have developed Amateur Radio education and training materials, topics, speakers,
        	 etc. that can be shared to enhance the education and training activities of all clubs. This information is available for amateur radio clubs 
        	 to use to enhance their club Education and Training programs. In addition, amateur radio clubs are invited to send their Education and 
        	 Training program materials to John Primus, AF6RJ 
        	 <a href="mailto:af6rj@arrl.net">af6rj@arrl.net</a>, for review and potential inclusion on the ARRL East Bay Section Education 
        	 and Training website. When sending your Education and Training program materials please ensure that these materials contain contact 
        	 information. By contributing education and training 
        	materials among the amateur radio community it is believed that everyone’s amateur radio activities and accomplishments can 
        	be enhanced.</p>
        	<!-- <p>The Education and Training website has been organized with Amateur Radio topics such as: License Testing, License Courses, 
        	Disaster Communication, Speakers, etc. Click on the Education and Training Category button at the left of the ARRL East Bay 
        	Section home page to enter the Education and Training category of the website. At the top of the Education and Training Category 
        	page a banner appears with topics such as License Testing, License Courses, Disaster Communication, Speakers, etc. shown that can 
        	be clicked to enter the specific topics.</p> -->
        	<br><br>
        	</div>
            <div class="col-md-5">
            <table class="table table-responsive">
        		<thead>
        			<tr>
        				<th>Course Name</th>
        				<th>Dates</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($classes as $row) {?>
        			<tr>
        				<td><?php echo anchor('public_ctl/class_details/' . $row['id'], $row['course']); ?></td>
        				<td><?php echo date("m/d", $row['date_from']) . ' - ' . date("m/d/Y", $row['date_to']); ?></td> 				
        			</tr>
        			<?php }
        			else {?>
        			<tr>
        				<td colspan="2">No testing on schedule</td>
        			</tr>
        			<?php }?>
        		</tbody>        	
        	</table>
        	Please, be aware that the above schedule may change due to concerns regarding Coronavirus (COVID-19) outbreak.
            </div>
            
            </div>
            <br><br>
            <br><br>
            <br><br>
        </div>
      </div>