<?php
/*------------
*
* Header Template
*
--------------*/
//this is our connection to the db
include('includes/mysql_connect.php');
?>

<!DOCTYPE html>

<!-- USED FOUNDATION HTML5 FRONT-END FRAMEWORK -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en">
 <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Twixel Home - Zachary Spear</title>
  
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
  
  <nav class="top-bar">
    
      <a class="logo left" href="home.php" title="Twixel">
        <img src="img/logo-b.png" alt="Twixel"/>
      </a>

      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="home.php">Home</a></li>
        <li class="has-dropdown">
          <a href="catalog.php#adobePlugins">Products</a>
          <ul class="dropdown">
            <li><a href="catalog.php#adobePlugins">Adobe Plugins</a></li>
            <li><a href="catalog.php#designSoftware">Design Software</a></li>
            <li><a href="catalog.php#audioRecording">Audio Recording</a></li>
            <li><a href="catalog.php#hardware">Hardware</a></li>
            <li><a href="catalog.php#webDevelopment">Web Development</a></li>
            <li><a href="catalog.php#videoEditing">Video Editing</a></li>
            <li><a href="catalog.php#wordpressThemes">Wordpress Themes</a></li>
          </ul>
        </li>
        <?php
          if($_SESSION["logged_in"] != "yes")
          {
            print "<li class='has-dropdown'>
                      <a href='signin.php'>Login</a>
                      <ul class='dropdown'>
                        <li>
                          <form method='post' action='signin.php' class='login-form'>
                            <label class='login_label' for='login_input_email'>Email: </label>
                            <input type='text' name='login_input_email' id='login_input_email' class='login_box' />

                            <label class='login_label' for='login_input_password'>Password: </label>
                            <input type='password' name='login_input_password' id='login_input_password' class='login_box' />
                            <input type='submit' value='Submit' class='login_button' />
                          </form>
                        </li>
                      </ul>
                   </li>";
          }
          else {
            print "
              <li class='has-dropdown'>
                <a href='client.php'>Account</a>
                <ul class='dropdown'>
                  <li><a href='client.php'>Account Information</a></li>
                  <li><a href='client.php#openOrders'>Open Orders</a></li>
                  <li><a href='client.php#pastOrders'>Past Orders</a></li>
                  <li><a href='logout.php'>Logout</a></li>
                </ul>
              </li>";
          }
        ?>
        <li><a href="cart.php">Cart (0)</a></li>
      </ul>
      <div class="clear"></div>
  </nav>

  <!-- End Header and Nav -->
<?php?>