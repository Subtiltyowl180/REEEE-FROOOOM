<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>


	<style>
	*{
		font-family: "century Gothic";
		font-size: 20px;
		width:300px;
      text-align: center;
}
form{
	display: grid;
	grid-template-columns: 100%;
	grid-template-rows: auto;
	justify-content: center;
	justify-items:center;
	text-align: center;


}

</style> 
</head>
<body>

<form action="login-process.php" method="post" >
	<div class="form">


	<input type="text" name="namee" placeholder=" Input Your Name" required>

    
    <input type="password"  name="passa" placeholder="Input Your Password" required>


    <input type="email" name="txtemail" placeholder="Input Your Email" required>
    <input type="text" name="txtmess" placeholder="Input Your Message" required>

    <input type="contact" name="txtcontact" placeholder="Input your Contact Number" required>
	
    <input type="Submit" value="Submit" name="btnSubmit">
<input type="reset" value="Clear" name="btnClear">

</div>

</form>
 <?php session_destroy();?>
</body>
</html>
