<div class="container">
	
	<div class="box">
    <div class="row">
        <div class="col-md-12">
        	<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Subject</th>
        				<th>Location</th>
        				<th>Date</th>
        				<th>Reference</th>
        				<th>Edit/Delete</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0) {
        		    foreach($lectures as $row) {?>
        			<tr>
        				<td><?php echo $row['topic_name']; ?></td>
        				<td class="elips1"><?php echo$row['location']; ?></td>
        				<td><?php 
        				if($row['date'] > 32400) {
        				    echo date("m/d/Y", $row['date']); 
        				}?></td>
        				<td class="elips1"><?php echo $row['topic_ref']; ?></td>
        				<td>
        					<a href="#" data-toggle="modal" data-target="#editData<?php echo $row['id']; ?>">Edit </a>
        					/    
        					<a href="#" data-toggle="modal" data-target="#deleteLecture<?php echo $row['id']; ?>">Delete Record</a>
        					<?php include 'inc_modal_edit_lecture.php'; ?> 
        					<?php include 'inc_modal_delete_lecture.php'; ?>				
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
    
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<br>
    		<a href="#" data-toggle="modal" data-target="#addLecture" class="btn btn-primary" role="button">Add Lecture</a>
    		<?php include 'inc_modal_lecture.php'; ?>
    	</div>
    </div>
    </div>    
	<div class="row">
    	<div class="col-md-10">
    		<p><?php echo anchor('user', 'Edit Your Personal Info', 'class="btn btn"'); ?></p>
    	</div>
	</div>  
	<div class="row">
    	<div class="col-md-10">
    		<p><?php echo anchor('public_ctl/reset_password', 'Reset Your Password', 'class="btn btn"'); ?></p>
    	</div>
	</div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
</div>
<!-- Footer -->