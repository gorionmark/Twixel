<?php 
  include 'includes/header.php';
?>

  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  
  <div class="row">
    <div class="nine columns">
      <h1>Products</h1>
      <h2>Our Best Sellers</h2>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="img/homeSliderImages/sliderFlares.png" width="1180" height="300" alt="sliderFlares" />
        <img src="img/homeSliderImages/sliderColorGrade.png" width="1180" height="300" alt="sliderColor" />
        <img src="img/homeSliderImages/sliderParticles.png" width="1180" height="300" alt="sliderParticles" />
        <img src="img/homeSliderImages/sliderTextEffects.png" width="1180" height="300" alt="sliderText" />
      </div>
    </div>
  </div>
  
  <!-- Three-up Content Blocks -->
  
  <div class="row">
    <div class="twelve columns">
      <h3>Product Categories</h3>
      <dl class="tabs">
        <dd class="active"><a href="#adobePlugins">Plugins</a></dd>
        <dd><a href="#designSoftware">Design Software</a></dd>
        <dd><a href="#audioRecording">Audio Recording</a></dd>
        <dd><a href="#hardware">Hardware</a></dd>
        <dd><a href="#webDevelopment">Web Development</a></dd>
        <dd><a href="#videoEditing">Video Editing</a></dd>
        <dd><a href="#wordpressThemes">Wordpress Themes</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="adobePluginsTab">

          <?php
            $counter = 0;
            $dbhost = 'localhost';
            $dbuser = 'gr073607';
            $dbpass = 'knights123!';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $conn ){
              die('Could not connect: ' . mysql_error());
            }

            $sql = 'SELECT * FROM products WHERE category = "plugin" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
        <li id="designSoftwareTab">
          <?php
            
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "design_software" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
        <li id="audioRecordingTab">
          <?php
            
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "audio_recording" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
        <li id="hardwareTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "hardware" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
        <li id="webDevelopmentTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "web_development" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
        <li id="videoEditingTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "video_editing" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
        <li id="wordpressThemesTab">
          <?php
            $counter = 0;
            $sql = 'SELECT * FROM products WHERE category = "wordpress_themes" ';

            $retval = mysql_query( $sql, $conn );
            if(! $retval ){
              die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];
                $image = $row['image'];

                if($counter == 0)
                {
                  print "<div class='row'>";
                }

                print "
                <div class='four columns catalog_items'>
                  <img src='".$image."' width='400' height='300' alt='".$name."' />
                  <h4>".$name."</h4>
                  <a href='#' class='radius button right'>Add to Cart</a>
                  <h5>$".$price."</h5>
                  <p>".$description."</p>
                  <div class='rating'>
                    0<i class='foundicon-thumb-up'></i>
                    0<i class='foundicon-thumb-down'></i>
                  </div>
                </div>";

              $counter++;

              if($counter == 3) 
              {
                print "</div>";
                $counter = 0;
              }
            }
          ?>
        </li>
      </ul>
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
