<?php

//Sidebar

?>

<div class="sidebar">

<?php

$query = "SELECT * FROM products";

$result = mysql_query($query);

//------------------------- CATALOG SIDEBAR
if($pageName == "catalog") {
?>
		<div class="aside">

<?php

$row = mysql_fetch_row($result);
?>
		<p>Twixel is proudly serving <?php echo count($row); ?> products</p>

		</div>
		<div class="aside">
			<h2>Support</h2>
			<p>Unsure of what you're doing? Call Support or <a href="contact.php" title="" >Submit a Help Ticket</a>.</p>
		</div>
		<div class="aside">
			<h2>Affiliates</h2>
			<p>We offer a competitive affiliate program where you can earn money for each sale made by someone you refer. Instant payments on every commission via PayPal. </p>
		</div>
		<div class="aside">
	        <h2>Stay up to date!</h2>
	        <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
	        <a href="#" class="radius button right">Sign-up</a>
	  	</div>
<?php
}
//--------------------------END CATALOG SIDEBAR



//---------------------------PROFILE SIDEBAR
else if($pageName == "client" || $pageName == "cart") {
?>
		<div class="aside admin-nav">
			<h2>Member Menu</h2>
			<ul>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Settings</a></li>
				<li><a href="cart.php" title=""><span>&nbsp;+&nbsp;</span>My Cart</a></li>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Downloads</a></li>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Profile</a></li>
			</ul>
		</div>
		<div class="aside">
			<h2>Support</h2>
			<p>Unsure of what you're doing? Call Support or <a href="contact.php" title="" >Submit a Help Ticket</a> with the Subject, "Member". </p>
		</div>
		<div class="aside">
			<h2>Affiliates</h2>
			<p>We offer a competitive affiliate program where you can earn money for each sale made by someone you refer. Instant payments on every commission via PayPal. </p>
		</div>
	    <div class="aside">
	        <h2>Stay up to date!</h2>
	        <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
	        <a href="#" class="radius button right">Sign-up</a>
	  	</div>
<?php
}
//---------------------------END PROFILE SIDEBAR


//---------------------------ADMIN SIDEBAR
else if($pageName == "admin") {
?>

		<div class="aside admin-nav">
			<h2>Admin Menu</h2>
			<ul>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Members</a></li>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Categories</a></li>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Products</a></li>
				<li><a href="#" title=""><span>&nbsp;+&nbsp;</span>Feature Item</a></li>
			</ul>
		</div>
		<div class="aside">
			<h2>Support</h2>
			<p>Unsure of what you're doing? Call Support or <a href="contact.php" title="" >Submit a Help Ticket</a> with the Subject, "Admin". </p>
		</div>
<?php
}
//---------------------------END ADMIN SIDEBAR


//---------------------------PROFILE & CONTACT SIDEBAR
else if($pageName == "help" || $pageName=="contact") {
?>

		<div class="aside">
			<h2>Support</h2>
			<p>location:<br/>123 Fake St. Orlando, FL</p>
			<p>email:<br/><a href="mailto:info@twixel.com" title="">info@twixel.com</a></p>
			<p>phone:<br/>407.555.5555</p>
		</div>
		<div class="aside">
			<h2>Affiliates</h2>
			<p>We offer a competitive affiliate program where you can earn money for each sale made by someone you refer. Instant payments on every commission via PayPal. </p>
		</div>
		<div class="aside">
	        <h2>Stay up to date!</h2>
	        <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
	        <a href="#" class="radius button right">Sign-up</a>
	  	</div>

<?php
}
//---------------------------END PROFILE & CONTACT SIDEBAR


//-----------------------------PRODUCT SIDEBAR
else if($pageName == "product") {
?>

<?php
}
//--------------------------END PRODUCT SIDEBAR



//---------------------------ABOUT SIDEBAR
else if($pageName == "about") {
?>

	<div class="aside">
		<h2>Kyler Berry</h2>
		<p> Web Ninja. Loves adventure and beatin' your Grandma at Checkers</p>
		<img src="img/me.jpg" alt="" />
	</div>
	<div class="aside">
		<h2>Affiliates</h2>
		<p>We offer a competitive affiliate program where you can earn money for each sale made by someone you refer. Instant payments on every commission via PayPal. </p>
	</div>
	<div class="aside">
        <h2>Stay up to date!</h2>
        <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
        <a href="#" class="radius button right">Sign-up</a>
  	</div>
<?php
}
//---------------------------END ABOUT SIDEBAR

?>

</div>

<?php

?>