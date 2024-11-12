
<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row">
  	<div class="col-md-12 text-center">
  		<h3>Getting On The Air (GOTA)</h3>
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
       		<p>The GOTA-HT class has a two sessions. During the first session the use of Handie Talkie (HT) radio is explained. The second session
       		is devoted to practice in using the HT radio.</p>
			<p>The first class reviews the controls on the HT radio, the most popular bands (frequencies) for HTs, the difference between 
			simplex and repeater operation, programming your radio, calling on the radio, communication nets, operating protocols and rules, 
			accessories, antennas, phonetic alphabet, public service events, Pacificon and Field Day.</p>
			<p>The second class gives you practice in talking on the radio, saying your call sign with phonetic alphabet, passing traffic (Messages)
			and a common courtesy exchanging information on the net.</p>
			
       	</div>  
       </div>
       <div class="row">
       	<div class="col-md-10 col-md-offset-1">
       		<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>GOTA Course</th>
        				<th style="width: 10%">Date From</th>
        				<th style="width: 10%">Date To</th>
        				<th style="width: 8%">Fee</th>
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