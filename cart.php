<?php 
  include 'includes/header.php';
?>

  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  <div class="spacer"></div>
  <div class="row">
    <div class="nine columns">
      <h1>Shopping Cart</h1>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>
    
  <div class="row">
    <div class="nine columns">
      <h4>Your Shopping Cart is empty</h4>
      <p>Your Shopping Cart is here anytime you need it. Why not fill it with some of our awesome products.
      <p>Head over to our <a href="catalog.php">Products Page</a> and make it so your shopping cart isn't lonely.</p>
      <a href="checkout.php" class="radius button right">Checkout</a>
    </div>
    <div class="three columns">
      <p>
        <a href="#"><img src="http://lorempixel.com/400/280/fashion/" alt="flareAd" /></a>
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
