<?php 
  include 'includes/header.php';
?>
  
  <div class="spacer"></div>

  <div class="row">
  	<div class="twelve columns">

  		<div id="signin">
  		    <form method='post' action='signin.php'>
            <h2>Login</h2>
  		      <input type='text' name='login_input_email' placeholder='Email' />
  		      <input type='password' name='login_input_password' placeholder='Password' />
  		      <input type='submit' value='Submit' class='radius button' />
  		      <a class="unlinked_button" id='signup_link' onclick='show_signup()'>Sign up now!</a>
  		    </form>
  	  	</div>
  	</div>
  </div>

  <div id="signup_form">

    <form action="signup.php" class="signup_form" method="post" onsubmit="validateData()">

      <h2>Signup</h2>
      
      <div class="signup_section">
        <input type="text" name="first_name" class="signup_input" maxlength="30" placeholder="First Name" />
        <input type="text" name="last_name" class="signup_input" maxlength="30" placeholder="Last Name" />
        <input type="text" name="email" class="signup_input" maxlength="50" placeholder="Email" />
        <input type="password" name="password" class="signup_input" maxlength="20" placeholder="Password" />
        <input type="text" name="address" class="signup_input" maxlength="30" placeholder="Address" />
        <fieldset class="signup_fieldset">
          <input type="text" name="city" class="signup_city" maxlength="20" placeholder="City" />
          <select class="signup_state" name="state">
            <option value="">State</option>

            <?php 

            $states = array(
              "AK", "AL", "AR", "AZ", "CA", "CO", "CT", "DC",  
              "DE", "FL", "GA", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA",  
              "MA", "MD", "ME", "MI", "MN", "MO", "MS", "MT", "NC", "ND", "NE",  
              "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "RI", "SC",  
              "SD", "TN", "TX", "UT", "VA", "VT", "WA", "WI", "WV", "WY"
              );

            for($i; $i < count($states); $i++) {echo "<option value='" . $states[$i] . "'>" . $states[$i] . "</option>";}
            ?>

          </select>
          <input type="text" name="zip" class="signup_zip" maxlength="5" placeholder="Zip" />
        </fieldset>
      </div>
      
      <input type="submit" name="Submit" value="Submit" class="radius button" />
      <a class="signup_cancel unlinked_button" onclick="hide_signup()">Cancel</a>
    </form>
  </div>

<!-- Footer -->
  <?php include('footer.php') ?>

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