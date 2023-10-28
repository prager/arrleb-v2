<div class="container">
	
	<div class="box">
    <div class="row">
        <div class="col-md-12">
        	<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Callsign</th>
        				<th>Email</th>
        				<th>Edit/Delete</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0) {
        		    foreach($users as $row) {?>
        			<tr>
        				<td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
        				<td><?php echo $row['callsign']; ?></td>
        				<td><?php echo $row['email']; ?></td>
        				<td>
							<?php echo anchor('master/edit_user/' . $row['id'], 'Edit'); ?>
        					/    
        					<a href="#" data-toggle="modal" data-target="#deleteUser<?php echo $row['id']; ?>">Delete</a>
        					<?php include 'inc_delete_user.php'; ?>
						</td>
        			</tr>
        			<?php }
        		} 
        		else {?>
        			<tr>
        				<td colspan="5">No lectures on record</td>
        			</tr>
        			<?php }?>
        		</tbody>        	
        	</table>
        </div>    
    </div>
    </div>
    <div class="row">&nbsp;</div> 
	<div class="row">
    	<div class="col-md-10">
    		<p><?php echo anchor('master/new_user', 'Add New User', 'class="btn btn"'); ?></p>
    	</div>
	</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
</div>
<!-- Footer -->