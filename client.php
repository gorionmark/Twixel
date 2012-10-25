<?php include('check_login.php') ?>
<!DOCTYPE html>

<!-- USED FOUNDATION HTML5 FRONT-END FRAMEWORK -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Twixel Client - Zachary Spear</title>
  
  <!-- IMPORT CSS -->
  
  <style type="text/css">
  	@import url("css/foundation.min.css");
	@import url("css/styles.css");
  </style>

  <link rel="icon" type="image/ico" href="favicon.ico" />

  <script src="js/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  
  <!-- Header and Nav -->
  <?php include('header.php') ?>
  <!-- End Header and Nav -->
  <?php



  ?>
  <div class="row">
    <div class="nine columns">
      <h1>Account</h1>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>

  <div class="row">
    <div class="nine columns">
      <dl class="tabs">
        <dd class="active"><a href="#accountInfo">Account Information</a></dd>
        <dd><a href="#openOrders">Open Orders</a></dd>
        <dd><a href="#pastOrders">Past Orders</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="accountInfoTab">
		  <?php
			print "
          		<h4>".$first_name." ".$last_name."</h4>
          		<h4>".$email."</h4>
              <h4>".$address."</h4>
              <h4>".$city." ".$state." ".$zip."</h4>";
		  ?>
          <div>
            <p><a href="admin.php">Admin Page</a></p>
          </div>
        </li>
        <li id="openOrdersTab">You have no open orders. Why not add something to your cart and checkout</li>
        <li id="pastOrdersTab">You have yet to order anything from us. That makes everyone at Twixel super sad.</li>
      </ul>
    </div>
    <div class="three columns">
      <p>
        <a href="#"><img src="http://lorempixel.com/400/280/technics/" alt="flareAd" /></a>
      </p>
      <p>
        <a href="#"><img src="http://lorempixel.com/400/280/sports/" alt="particlesAd" /></a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="panel">
        <h4>Stay up to date!</h4>
            
        <div class="row">
          <div class="nine columns">
            <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
          </div>
          <div class="three columns">
            <a href="#" class="radius button right">Sign-up</a>
          </div>
        </div>
      </div>
  </div>
  
  
  <!-- Footer -->
  <?php include('footer.php') ?>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="js/jquery.js"></script>
  
  <script src="js/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="js/jquery.foundation.forms.js"></script>
  
  <script src="js/jquery.foundation.reveal.js"></script>
  
  <script src="js/jquery.foundation.orbit.js"></script>
  
  <script src="js/jquery.foundation.navigation.js"></script>
  
  <script src="js/jquery.foundation.buttons.js"></script>
  
  <script src="js/jquery.foundation.tabs.js"></script>
  
  <script src="js/jquery.foundation.tooltips.js"></script>
  
  <script src="js/jquery.foundation.accordion.js"></script>
  
  <script src="js/jquery.placeholder.js"></script>
  
  <script src="js/jquery.foundation.alerts.js"></script>
  
  <script src="js/jquery.foundation.topbar.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="js/app.js"></script>

  <script type="text/javascript">
     $(window).load(function() {
         $('#slider').orbit();
     });
  </script>
  
</body>
</html>
