
		    
<!-- Delete Lecture Modal -->
		  <div class="modal fade" id="deletePos<?php echo $row['id_staff']; ?>" role="dialog">
		    <div class="modal-dialog  modal-sm">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal"> × </button>
		          <h4><span class="glyphicon glyphicon-remove-sign"></span> Delete Staff Position</h4>
		        </div>
		        <div class="modal-body">
    		    <div class="row">
    		    <div class="row text-center">
				<div class="col-md-12">
    		    	Delete Staff Position "<?php echo $row['pos_name']; ?>" ?<br><br><?php echo anchor('staff/delete_staff/' . $row['id_staff'], 
    		    	    ' Yes, Delete Staff Position ', 'class="btn btn-default"')?> 
    		    	<br><br>   		    
    		    </div>
		    	</div> 
		    </div>
		   </div>
		 </div>
		 </div>
		 </div>