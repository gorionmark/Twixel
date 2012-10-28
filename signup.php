<?php
	session_start();
	$FName = $_POST['first_name'];
	$LName = $_POST['last_name'];
	$EMAIL = $_POST['email'];
	$PASSWORD = $_POST['password'];

	$connection = mysql_connect("localhost", "gr073607", "knights123!")or die("cannot connect"); 
	mysql_select_db("gr073607", $connection)or die("cannot select DB");
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="INSERT INTO users (id, first_name, last_name, email, password) VALUES ('NULL', '".$FName."', '".$LName."', '".$EMAIL."', '".$PASSWORD."')";
	$result=mysql_query($sql);
	
	$_SESSION['email'] = $EMAIL;
	
	session_register("login_input_email");
	session_register("login_input_password");
	header("location:client.php");
?>