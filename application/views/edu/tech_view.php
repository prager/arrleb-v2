
<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Technician License Course</h3>
  	</div>
  </div>
  <div class="row d-flex align-items-center flex-wrap">
     <div class="col-md-12">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/general', 'General'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/extra', 'Extra'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/inday', 'Ham in a Day'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/testing', 'License Testing'); ?></li>
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
       <div class="row">
       	<div class="col-md-10 col-md-offset-1">
       	<p>People get involved with amateur radio for all sorts of reasons. 
       	It is a magnificently diverse endeavor with a lot of opportunities.  It can be a fun technical hobby, a way to provide 
       	community service, or an important facet of family emergency preparedness.  To become an amateur radio operator you must obtain 
       	a license from the Federal Communications Commission (FCC).  The FCC is the federal governing body overseeing the Amateur Radio 
       	Service, known colloquially as “ham” radio.  The FCC currently issues three different amateur radio license levels, or classes:</p>
       	</div>
       	</div>
       	<div class="row text-center">
       	<div class="col-md-4 col-md-offset-2">
       	<hr>
       	 (1) Technician License Class<br><br>
       	 (2) General License Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
       	 (3) Extra License Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       	 <hr>
       	 </div>       	 
       <div class="col-md-4">
       	<div class="center-section"><a href="https://clipartxtras.com/download/e9d3aa3719ce1a712a2359d2f69fb0fcdea92c0e.html" 
       	title="Image from clipartxtras.com" target="_blank">
       	<img src="<?php echo base_url() ;?>/assets/img/op.png" alt="ham radio drawing" class="img-responsive" /></a>
       	</div>
       </div>
       	 </div>
       	 <div class="row">&nbsp;</div>
       	 <div class="row">
       	<div class="col-md-10 col-md-offset-1">
       <p>The Technician License Class is the introductory level license and it must be earned first. The introductory Technician Class license 
       	offers a fantastic set of frequency capabilities right from the git-go.</p>
       	</div>
       </div>       
       <div class="row">
       	<div class="col-md-10 col-md-offset-1">
       	<hr>
       		<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Testing Event</th>
        				<th style="width: 10%">Date From</th>
        				<th style="width: 10%">Date To</th>
        				<th style="width: 8%">Fee</th>
        				<th>Status</th>
        				<th style="width: 20%">Location</th>
        				<th>View Details</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($tests as $row) {?>
        			<tr>
        				<td><strong><?php echo $row['course']; ?></strong></td>
        				<td><?php echo date("m/d/Y", $row['date_from']); ?></td>
        				<td><?php echo date("m/d/Y", $row['date_to']); ?></td>
        				<td><?php setlocale(LC_MONETARY, 'en_US.utf8');
                            echo money_format('%(#10n', $row['fee']);?></td>
        				<td><?php echo $row['status']; ?></td>
        				<td class="elips1"><?php echo $row['location']; ?></td>
        				<td><?php echo anchor('Public_ctl/class_details/' . $row['id'], 'View'); ?></td>        				
        			</tr>
        			<?php }
        			else {?>
        			<tr>
        				<td colspan="7">No testing on schedule</td>
        			</tr>
        			<?php }?>
        		</tbody>        	
        	</table>
       </div>
       </div>
       <div class="row">&nbsp;</div>
   </div>
</div>