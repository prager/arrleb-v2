<div class="container">
	
	<div class="box">
    <div class="row">
        <div class="col-md-12">
        	<table class="table table-striped table-responsive">
        		<thead>
        			<tr>
        				<th>Course</th>
        				<th style="width: 8%">Date From</th>
        				<th style="width: 8%">Date To</th>
        				<th>Fee</th>
        				<th>Status</th>
        				<th>Location</th>
        				<th>URL</th>
        				<th>Edit</th>
        			</tr>
        		</thead>
        		<tbody>
        		<?php if($edu['cnt'] > 0) {
        		    foreach($edu['classes'] as $row) {?>
        			<tr>
        				<td><strong><?php echo $row['course']; ?></strong></td>
        				<td><?php echo date("m/d/Y", $row['date_from']); ?></td>
        				<td><?php echo date("m/d/Y", $row['date_to']); ?></td>
        				<td><?php setlocale(LC_MONETARY, 'en_US.utf8');
                            echo money_format('%(#10n', $row['fee']);?></td>
        				<td><?php echo $row['status']; ?></td>
        				<td class="elips1"><?php echo $row['location']; ?></td>
        				<td class="elips2"><?php echo $row['details_url']; ?></td>
        				<td>
        					<a href="#" data-toggle="modal" data-target="#editData<?php echo $row['id']; ?>">Edit </a> 
        					/    
        					<a href="#" data-toggle="modal" data-target="#deleteClass<?php echo $row['id']; ?>">Delete Class</a>
        					<?php include 'inc_delete_class.php'; ?>
        					<?php include 'inc_modal_edit.php'; ?>     				
        				</td>
        			</tr>
        			<?php }
                    }?>
        		</tbody>        	
        	</table>
        </div>    
    </div>
    
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<br>
    		<a href="#" data-toggle="modal" data-target="#addClass" class="btn btn-primary" role="button">Add Class</a>
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
