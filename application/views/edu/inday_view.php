
<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Ham Class-In-One Day</h3>
  	</div>
  </div>
  <div class="row d-flex align-items-center flex-wrap">
     <div class="col-md-12">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/technician', 'Technician'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/General', 'General'); ?></li>
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl/extra', 'Extra'); ?></li>
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
   	   	<div class="col-md-6 col-md-offset-1">
   	   	<p>This is NOT a class in the normal sense.  It is a guided study for the Technician Class License and/or the General Class License.   
   	   	The guided study typically consists of six 45-minute reading/study periods, with breaks.  The Ham in One Day class provides study methods 
   	   	to prepare for the License testing and provides guidance for using the study methods in an organized way.  License testing immediately follows 
   	   	the study session.</p>
   	   	<p>This Amateur Radio Licensing system allows the individual to study at their own pace. It does require that the student must be self-motivated. 
   	   	No pre-study or preparation is required.</p>
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
       		<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Ham In-One-Day</th>
        				<th style="width: 10%">Date</th>
        				<th style="width: 8%">Fee</th>
        				<th style="width: 20%">Location</th>
        				<th>View Details</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($inday as $row) {?>
        			<tr>
        				<td><strong><?php echo $row['course']; ?></strong></td>
        				<td><?php echo date("m/d/Y", $row['date_to']); ?></td>
        				<td><?php setlocale(LC_MONETARY, 'en_US.utf8');
                            echo money_format('%(#10n', $row['fee']);?></td>
        				<td class="elips1"><?php echo $row['location']; ?></td>
        				<td><?php echo anchor('Public_ctl/class_details/' . $row['id'], 'View'); ?></td>        				
        			</tr>
        			<?php }
        			else {?>
        			<tr>
        				<td colspan="7">No courses on schedule</td>
        			</tr>
        			<?php }?>
        		</tbody>        	
        	</table>
       </div>
       </div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
       <div class="row">&nbsp;</div>
 </div>
</div>