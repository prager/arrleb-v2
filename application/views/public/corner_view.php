<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row d-flex align-items-center flex-wrap">
   <div class="col-md-7">
    <h1 class="h2">Club Corner</h1>
    </div>
     <div class="col-md-5">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('Public_ctl', 'Home');?></li>
       <li class="breadcrumb-item active">Club Corner</li>
      </ul>
     </div>
    </div>
  </div>
</div>

<div id="content">
        <div class="container">
        
            <div id="customer-orders" class="col-md-10">
              <p class="text-muted lead">
              Radio clubs located in ARRL East Bay Section area:</p>
                <div class="table-responsive">
                  <table class="table table-hover">                    
                    <tbody>
                    <?php if($cnt > 0) {
                        foreach($clubs as $row) {
                        ?>
                      <tr>
                        <td>
							<h4><?php echo $row['name']; ?></h4>
							<p><?php echo $row['long_name'] . ' (' . $row['name'] . ') '. $row['narrative']; ?> 
							<br>
							<?php if($row['link'] != '') {?>
							For the club's web page 
							<?php echo anchor_popup($row['link'], 'click here'); 
                            }?>
							</p>
						</td>
                      </tr>
                      <?php }
                        
                        }
                        else {?>
                        	<tr>
                        	<td>There are no clubs listed...</td>
                        	</tr>
                        <?php }?>
                    </tbody>
                  </table>
                </div>

            </div>
           <!-- <div class="col-md-3 mt-4 mt-md-0">-->
              <!-- CUSTOMER MENU -->
              <!-- <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Customer section</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm">
                    <li class="nav-item"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> My orders</a></li>
                    <li class="nav-item"><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a></li>
                    <li class="nav-item"><a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
              </div> --> 
            <!-- </div>-->

        </div>
      </div>