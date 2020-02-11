<?php session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

     <?php
     if(isset($_SESSION['message'])) {
     
     ?>


     <div class="message">   <?php  echo$_SESSION['message'];?> </div>

     <?php

   }

   ?>   

 











     




<section class="form">
     
    <center> <div class="form-title">
     	<h1>Login</h1>

     	<a  class="a1" href="https://facebook.com" >Login with Facebook</a> <br>
     	
     	<br>	<a class="a2" href="https://mail.google.com/" >Login with Google</a>
     
     </div>


   <h2><b>Login with email</b></h2>

<div class="form-body">
 
<form name="contactForm" action="login-Process.php" method="post">
	<div>
	<input type="text" name="txtName" placeholder="Your Username" required>
	<br>
	<input type="password"  name="txtpass" placeholder="Your Password" required>


<div class="btns">
<input type="submit" value="Login" name="btnLogin"><br> <br>		


</div></section>
    <?php session_destroy();?>
</body>
</html>