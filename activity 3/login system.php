<?php

 $_SESSION['Username'] = $_POST["txtname"];
  $_SESSION['Password'] = $_POST["txpass"];

if(isset($_POST['btnSubmit'])) {
$_SESSION = $_POST['txtname'] . '<br>';
$_SESSION = $_POST['txtpass'] .'<br>';
$_SESSION = $_POST['txtemail'] .'<br>';
$_SESSION = $_POST['txtmess'] .'<br>';
$_SESSION = $_POST['txtcontact'].'<br>';
}

session_start();

$_SESSION['Username']  = $_SESSION["txtname"];
$_SESSION['Password'] = $_SESSION["txtpass"];

if(isset($_POST['btnLogin'])) {
	if($_POST['txtName']== $_SESSION['Username']) {

		if($_POST['txtpass']== $_SESSION['Password']) {

			$_SESSION['message'] ="Login Sucessfully";
		} else {
		
		$_SESSION['message'] = "Incorrect Password"; 

		}

	}else
 		$_SESSION['message'] ="This Account does not exist!";



	header("location:login.php");

}




 ?>