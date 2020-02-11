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


header("location:login.php");
?>