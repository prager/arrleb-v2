<div class="container">
	
	<div class="box">
    <div class="row">
        <div class="col-md-12">
        	<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Event</th>
        				<th style="width: 8%">Date</th>
        				<th>Day</th>
        				<th>Ham Club</th>
        				<th>Coordinator</th>
        				<th>Location</th>
        				<th>URL</th>
        				<th>Edit</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($events as $row) {?>
        			<tr>
        				<td><strong><?php echo $row['name']; ?></strong></td>
        				<td>
            				<?php 
                				if($row['date'] != 0) {
                				    echo date("m/d/Y", $row['date']); 
                				}
                				else {
                				    echo 'TBD';
                				}
            				?>
        				</td>
        				<td><?php echo $row['day']; ?></td>
        				<td><?php echo $row['club']; ?></td>
        				<td><?php echo $row['coordinator']; ?></td>
        				<td class="elips1"><?php echo $row['location']; ?></td>
        				<td class="elips2"><?php echo $row['web']; ?></td>
        				<td>
        					<a href="#" data-toggle="modal" data-target="#editData<?php echo $row['id']; ?>">Edit </a> 
        					/    
        					<a href="#" data-toggle="modal" data-target="#deleteEvent<?php echo $row['id']; ?>">Delete Event</a>
        					<?php include 'inc_delete_event.php'; ?>
        					<?php include 'inc_modal_edit.php'; ?>     				
        				</td>
        			</tr>
        			<?php }?>
        		</tbody>        	
        	</table>
        </div>    
    </div>
    
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<br>
    		<a href="#" data-toggle="modal" data-target="#addEvent" class="btn btn-primary" role="button">Add Event</a>
    		<?php include 'inc_modal_add.php'; ?>
    	</div>
    </div>
    </div>    
	<div class="row">
    	<div class="col-md-10">
    		<p><?php echo anchor('user', 'Edit Your Personal Info', 'class="btn btn"'); ?></p>
    	</div>
	</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
</div>
<!-- Footer -->
