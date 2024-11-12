<div id="heading-breadcrumbs">
 <div class="container">
  <div class="row d-flex align-items-center flex-wrap">
   <div class="col-md-7">
    <h1 class="h2">Public Service Event Details</h1>
    </div>
     <div class="col-md-5">
      <ul class="breadcrumb d-flex justify-content-end">
       <li class="breadcrumb-item"><?php echo anchor($home, $cur)?></li>
       <li class="breadcrumb-item active">Event Details</li>
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
              <div class="col-md-12">
                <h3><?php echo $event['name']; ?></h3>
                <p class="text-muted lead">
                Date: <?php echo date("m/d/Y", $event['date']); ?><br><br>Ham Club: <?php echo $event['club']; ?><br><br>
                Location: <?php echo $event['location']; ?> <br><br>
                Radio Coordinator: <?php echo $event['coordinator'];?><br><br>
                Additional details - <?php echo $event['web']; ?>               
                </p>
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