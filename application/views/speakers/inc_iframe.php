<div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Callsign</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if($cnt > 0) {?>
                    <?php foreach($speakers as $row) {?>
                      <tr>
                        <td style="color: black;"><?php echo anchor_popup('speaker/show_speaker/' . $row['id'], 
                            $row['fname'] . ' ' . $row['lname']); ?></td>
                        <td>
                        	<?php 
                        	if($row['callsign'] != '') {
                        	    echo $row['callsign'];
                        	}
                        	else {
                        	    echo 'N/A';
                        	}
                        	?>
                        </td>
                      </tr>
                      <?php }?> 
                      <?php }
                      else { ?>
                      <tr>
                      	<td>No speakers listed</td>
                      	<td>&nbsp;</td>
                      </tr>
                     <?php }?>                     
                    </tbody>
                  </table>
                </div>