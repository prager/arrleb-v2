<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row d-flex align-items-center flex-wrap">
   <div class="col-md-7">
    <h1 class="h2"><?php echo $fname . ' ' . $lname; ?></h1>
    </div>
     <div class="col-md-5">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor('speaker/show_speaker/' . $id, 'Speaker Page'); ?></li>
      </ul>
     </div>
    </div>
  </div>
</div>

<div id="content">
        <div class="container">
        
            <div id="customer-orders" class="col-md-12">
              <div class="box mt-0 mb-lg-0">
              <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h3><?php echo $topic_name; ?></h3>
                <?php if($date > 32400) {?>
                <p>
                Date: <?php echo date("m/d/Y", $date); ?><br><br>
                <?php }?>
                <?php if($location != '') {?>
                Location: <?php echo $location; ?> <br><br>
                <?php }
                else {
                    echo 'Location N/A<br><br>';
                }
                ?>                
                Lecture Summary<br><br><?php 
                if(strlen($topic_text) > 0)
                    echo nl2br($topic_text, FALSE);
                else 
                    echo 'N/A';
                    ?>               
                </p>
                </div>
                </div>                
              <div class="row">
              <div class="col-md-10 col-md-offset-1">
              <hr>
              	<?php if($topic_ref != '') {?>
              		Reference:<br><br> <?php echo $topic_ref; ?>
              	<?php }?>
              </div>
              </div>
              </div>
              <div class="row">&nbsp;</div>
              <div class="row">&nbsp;</div>
              <div class="row">&nbsp;</div>
              <div class="row">&nbsp;</div>
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