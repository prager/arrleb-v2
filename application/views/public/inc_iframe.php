<div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Course</th>
                        <th>Dates</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(count($edu['classes']) > 0) {?>
                    <?php foreach($edu['classes'] as $row) {?>
                      <tr>
                        <td style="color: black;"><?php echo anchor_popup('Public_ctl/class_details/' . $row['id'], $row['course']); ?></td>
                        <td><?php echo date("m/d", $row['date_from']) . ' - ' . date("m/d/Y", $row['date_to']); ?></td>
                      </tr>
                      <?php }?> 
                      <?php }
                      else { ?>
                      <tr>
                      	<td>No classes listed</td>
                      	<td>&nbsp;</td>
                      </tr>
                     <?php }?>                     
                    </tbody>
                  </table>
                </div>