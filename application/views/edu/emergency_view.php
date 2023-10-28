
<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Emergency Preparedness</h3>
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
       	   	<p>Amateur Radio may be a hobby, but it can also play a crucial role in providing communications during a disaster when other 
       	   	means may not be available. The critical link in any major disaster is the flow of information. During such incidents, amateur 
       	   	radio operators can be called upon for relaying crucial information to emergency management officials.</p>
   	   	</div>   	   
   	   </div>
   	   <div class="row">
   	   	<div class="col-md-6 col-md-offset-1">
   	   	<p>Amateur Radio operators are located in many areas and, because they do not rely on any infrastructure, they are able to report what 
   	   	is happening in their areas during emergency situations.  These reports can then be relayed to officials who can use it to determine what 
   	   	actions may need to be taken. Amateur radio operators may also be assigned to report to a specific location to assist with communications at 
   	   	a shelter, a hospital, or an Emergency Operations Center, to assist in communications as needed and to gather information.</p>
   	   	<p>Various class sessions will be offered to help amateur radio operators understand and prepare to provide communications needed to 
       	   	support an emergency incident. These classes will help insure that we can all send and receive messages in the most efficient way 
       	   	possible, learn how nets are organized and operated, and much more. To be a benefit to our served agencies we must be well trained and 
       	   	practiced.</p>
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
        				<th>Course</th>
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