<div class="container">
	
	<div class="box">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Position</th>
        				<th>Name</th>
        				<th>Callsign</th>
        				<th>Edit</th>
        			</tr>
        		</thead>
        		<tbody>
		        <?php echo form_open('staff/edit_staff/'); ?>
        		<?php foreach($positions as $row) {?>
        			<tr>
        				<td><?php echo $row['pos_name']; ?></td>
        				<td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
        				<td><?php echo $row['callsign']; ?></td>
        				<td>
        					<a href="#" data-toggle="modal" data-target="#editData<?php echo $row['id_staff']; ?>">Edit </a> 
        					<!-- /    
        					<a href="#" data-toggle="modal" data-target="#deletePos<?php echo $row['id_staff']; ?>">Delete </a> --> 
        					<?php include 'inc_delete_pos.php'; ?>
        					<?php include 'inc_edit_pos.php'; ?>   				
        				</td>
        			</tr>
        			<?php }?>
        		</tbody>        	
        	</table>
        </div>    
    </div>
    
	<?php echo form_close(); ?>
     <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<!--<br>
    		<a href="#" data-toggle="modal" data-target="#addPos" class="btn btn-primary" role="button">Add Staff Position</a> --> 
    		<?php //include 'inc_modal_add.php'; ?>
    	</div>
    </div>
    </div>   
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<p><?php echo anchor('user', 'Edit Your Personal Info', 'class="btn btn"'); ?></p>
    	</div>
	</div>  
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
    		<p><?php echo anchor('public_ctl/reset_password', 'Reset Your Password', 'class="btn btn"'); ?></p>
    	</div>
	</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
</div>
<!-- Footer -->
