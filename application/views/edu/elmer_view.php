
<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Who is a Mentor? (Formerly Elmer)</h3>
  	</div>
  </div>
  <div class="row d-flex align-items-center flex-wrap">
     <div class="col-md-12">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/technician', 'Technician'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/General', 'General'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/extra', 'Extra'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/inday', 'Ham in a Day'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/testing', 'License Testing'); ?></li>
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
       <div class="row">
       	<div class="col-md-6 col-md-offset-1">
       	<div class="vertical">
       	<p>As someone learning about Amateur Radio, you’ll hear the term “Elmer” and “Elmering” a lot!  A ham radio “Elmer” is someone who personally guides
       	and tutors a new ham, both before and after earning a license.
       	It doesn’t refer to anyone in particular, just the more experienced hams who help newcomers.
       	<br><br>
       	Using the word “Elmer” to mean “mentor” is unique to ham radio.  Rick Lindquist, WW1ME traces the origin of the term to the March 1971
       	issue of QST magazine; the term appeared in a “How’s DX” column by Rod Newkirk, W9BRD.  Rod’s mentor was a ham named Elmer and Rod thought
       	every new ham should have an Elmer of their own.  The name stuck and since then, “Elmering” has meant “helping.”
       	<br><br>
       	Every ham has at least one Elmer at some point.  You will, too, and if someone refers to you as their “Elmer,” you can be proud.
       	<br><br>
       	Source:  Ham Radio License Manual, 4th edition
       	<br><br>
       	</div>
       </div>
       <div class="col-md-4">
       <div class="row">&nbsp;</div>
       <div class="vertical">
       	<div class="center-section"><a href="https://clipartxtras.com/download/910f3edf58df3ee72e77ef4b56ed88ada21c4176.html"
       	title="Image from clipartxtras.com" target="_blank" ><img src="<?php echo base_url() ;?>/assets/img/op2.gif" width="300" alt="ham radio drawing" /></a>
       	</div>
       	</div>
       </div>
       </div>
       <div class="row">&nbsp;</div>
       <div class="row">
       	<div class="col-md-10 col-md-offset-1">
			<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Callsign</th>
        				<th>Email</th>
        				<th>Details</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($elmers as $row) {?>
        			<tr>
        				<td><?php echo $row['fname'] . ' '. $row['lname'];?></td>
        				<td><?php
        				if($row['callsign'] != '') {
        				    echo $row['callsign'];
        				}
        				else {
        				    echo 'N/A';
        				}?></td>
        				<td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
        				<td><?php echo anchor('user/show_elmer/' . $row['id_user'], 'View'); ?></td>
        			</tr>
        			<?php }
        			else {?>
        			<tr>
        				<td colspan="4">No mentors (elmers) listed</td>
        			</tr>
        			<?php }?>
        		</tbody>
        	</table>
       	</div>
       </div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
 </div>
</div>
