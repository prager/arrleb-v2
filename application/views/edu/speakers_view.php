
<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Speakers</h3>
  	</div>
  </div>
  <div class="row d-flex align-items-center flex-wrap">
     <div class="col-md-12">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/technician', 'Technician'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/general', 'General'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/extra', 'Extra'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/inday', 'Ham in a Day'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/testing', 'License Testing'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/elmer', 'Elmer'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/onair', 'Getting on the Air'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/emergency', 'Emergency Preparedness'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/auxiliary', 'Auxiliary'); ?></li>
      </ul>
     </div>
    </div>
  </div>
</div>

<div id="content">
   <div class="container">
       <div class="row">
       	<div class="col-md-8 col-md-offset-2">
       	The ARRL East Bay Section is establishing a Speakers Bureau to provide knowledgeable and effective Amateur Radio Topical speakers who
       	are available to address amateur radio clubs and community groups. Please, click on the speaker's link below to bring up his or her details
       	and expertise to make potential speaking arrangements.<br><br>
       	Interested speakers, please register with the ARRL East Bay Section by clicking <?php echo anchor('register', 
       	    'here to bring up the registration page')?>
       	. Thank you!
       </div>
       </div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">
       	<div class="col-md-8 col-md-offset-2">
			<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Callsign</th>
        				<th>Location</th>
        				<th>Email</th>
        				<th>Details</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($speakers as $row) {?>
        			<tr>
        				<td><?php echo $row['fname'] . ' '. $row['lname'];?></td>
        				<td><?php
        				if($row['callsign'] != '') {
        				    echo $row['callsign'];
        				}
        				else {
        				    echo 'N/A';
        				}?></td>
        				<td><?php echo $row['city'] . ', ' .$row['state']; ?></td>
        				<td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
        				<td><?php echo anchor('speaker/show_speaker/' . $row['id'], 'View'); ?></td>
        			</tr>
        			<?php }
        			else {?>
        			<tr>
        				<td colspan="5">No speakers listed</td>
        			</tr>
        			<?php }?>
        		</tbody>
        	</table>
       	</div>
       </div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
 </div>
</div>
