<!-- Delete Class Modal -->
		  <div class="modal fade" id="deleteUser<?php echo $row['id']; ?>" role="dialog">
		    <div class="modal-dialog  modal-sm">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal"> × </button>
		          <h4><span class="glyphicon glyphicon-remove-sign"></span> Delete User</h4>
		        </div>
		        <div class="modal-body">
    		    <div class="row">
    		    <div class="row text-center">
				<div class="col-md-12">
    		    	Delete User "<?php echo $row['fname'] . ' ' . $row['lname']; ?>" ?<br><br><?php echo anchor('master/delete_user/' . $row['id'], 
    		    	    ' Yes, Delete User ', 'class="btn btn-default"')?> 
    		    	<br><br>   		    
    		    </div>
		    	</div> 
		    </div>
		   </div>
		 </div>
		 </div>
		 </div>