<div class="container">
	
	<div class="box">
    <div class="row">
        <div class="col-md-12">
        	<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Name</th>
        				<th>Link</th>
        				<th>Narrative</th>
        				<th>Active</th>
        				<th>Edit</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($cnt > 0)
        		    foreach($clubs as $row) {?>
        			<tr>
        				<td><?php echo $row['name']; ?></td>
        				<td><?php echo $row['link']; ?></td>
        				<td class="elips1"><?php echo $row['narrative']; ?></td>
        				<td>
        					<?php 
        					if($row['active'] == 0) {
        					    echo 'Not Active';
        					}
        					else {
        					    echo 'Active';
        					}
        				    ?>
        				</td>
        				<td>
        					<a href="#" data-toggle="modal" data-target="#editData<?php echo $row['id']; ?>">Edit </a> 
        					/    
        					<a href="#" data-toggle="modal" data-target="#deleteClub<?php echo $row['id']; ?>">Delete Club</a>
        					<?php include 'inc_delete_club.php'; ?>
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
    		<a href="#" data-toggle="modal" data-target="#addClass" class="btn btn-primary" role="button">Add Club</a>
    		<?php include 'inc_modal_add.php'; ?>
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
