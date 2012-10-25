<!-- Header and Nav -->
  
  <nav class="top-bar contain-to-grid">
    
    <ul>
      <!-- Title Area -->
      <li>
      	<a href="home.php"><img src="img/logo.svg" alt="logo" height="40" width="40" /></a>
      </li>
      <li class="name">
      	
        <h1>
          <a href="home.php">
            Twixel
          </a>
        </h1>
      </li>
    </ul>

    <section>
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li><a href="home.php">Home</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="catalog.php#adobePlugins">Products</a>
          <ul class="dropdown">
            <li><a href="catalog.php#adobePlugins">Adobe Plugins</a></li>
            <li><a href="catalog.php#adobeSoftware">Adobe Software</a></li>
            <li><a href="catalog.php#mayaPlugins">Maya Plugins</a></li>
            <li><a href="catalog.php#wordPressThemes">WordPress Themes</a></li>
            <li><a href="catalog.php#webAssets">Web Assets</a></li>
            <li><a href="catalog.php#sonySoftware">Sony Software</a></li>
          </ul>
        </li>
        <li class="divider"></li>
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
        <li class="divider"></li>
        <li><a href="cart.php">Cart (0)</a></li>
      </ul>
    </section>
  </nav>

  <!-- End Header and Nav -->