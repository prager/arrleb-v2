<div class="container text-center">
<br><br>
<hr />
<br><br>

<div class="row">
<div class="col-md-6 col-md-offset-3 heading">
<h3>Admin Features Available</h3>
</div>
</div>
<div class="row">
<div class="col-md-10 col-md-offset-1">

<?php if(strlen($user['profile']>0)) {?>
<ol class="breadcrumb">
	<?php 
  	if(is_numeric(strpos($user['profile'], "99"))) {?>
  <li>  	
  	    <?php echo anchor('master/users', 'User Management'); ?>
  </li>
  	<?php } 
  
  if(is_numeric(strpos($user['profile'], "99"))) { ?>
  <li>
  	    <?php  echo anchor('master/user_types', 'User Types'); ?>
  </li>
  	<?php }
  	
  if((is_numeric(strpos($user['profile'], "99"))) || (is_numeric(strpos($user['profile'], "5")))) {?>
  <li>      
         <?php  echo anchor('club', 'Clubs'); ?>
  </li>
   <?php    }
   
   if((is_numeric(strpos($user['profile'], "99"))) || (is_numeric(strpos($user['profile'], "1")))) {?>   
  <li> 
          <?php echo anchor('edu', 'Classes');?>
  </li>
   <?php    }
   
   if(is_numeric(strpos($user['profile'], "99"))) {?>
  <li> 
         <?php  echo anchor('staff', 'Staff');?>
  </li>
   <?php    }
  
   if((is_numeric(strpos($user['profile'], "99"))) || (is_numeric(strpos($user['profile'], "3")))) {?>
  <li>
          <?php  echo anchor('speaker', 'Speaker'); ?>
  </li>
  <?php     }
  
   if((is_numeric(strpos($user['profile'], "99"))) || (is_numeric(strpos($user['profile'], "2")))) {?>
  <li>
          <?php  echo anchor('events', 'Events'); ?>
  </li>
  <?php     }
   
  if(is_numeric(strpos($user['profile'], "99"))) { ?>
  <li>
        <?php  echo anchor('master/set_user_profile', 'Set User Profile'); ?>
  </li>
  <?php  } ?>
</ol>
<?php }
    else {
        //echo '<span style="color: red;">There are no items in user profile</span>';  
    }
?>
</div>
</div>

<div class="row">
<div class="col-md-8 col-md-offset-2">
<ol class="breadcrumb">
	<li><?php echo anchor('user', 'Edit Your Personal Info', 'class="btn btn"'); ?></li>
	<li><?php echo anchor('public_ctl/reset_password', 'Reset Your Password', 'class="btn btn"'); ?></li>
</ol>
</div>
</div>
<br>
<hr />
<br><br><br>
</div>
<!-- Footer -->
