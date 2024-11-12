<!-- Delete Class Modal -->
		  <div class="modal fade" id="deleteClass<?php echo $row['id']; ?>" role="dialog">
		    <div class="modal-dialog  modal-sm">
		
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal"> × </button>
		          <h4><span class="glyphicon glyphicon-remove-sign"></span> Delete Class</h4>
		        </div>
		        <div class="modal-body">
    		    <div class="row">
    		    <div class="row text-center">
				<div class="col-md-12">
    		    	Delete Class "<?php echo $row['course']; ?>" ?<br><br><?php echo anchor('edu/delete_class/' . $row['id'], 
    		    	    ' Yes, Delete Class ', 'class="btn btn-default"')?> 
    		    	<br><br>   		    
    		    </div>
		    	</div> 
		    </div>
		   </div>
		 </div>
		 </div>
		 </div>