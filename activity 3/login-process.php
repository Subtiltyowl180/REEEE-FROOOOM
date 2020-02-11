<?php  










session_start();



if(isset($_POST['btnSubmit'])) {
$_SESSION['txtNamee'] = $_POST['namee'] ;
$_SESSION['txtpasss'] = $_POST['passa'] ;
$_SESSION = $_POST['txtemail'];
$_SESSION = $_POST['txtmess'] ;
$_SESSION = $_POST['txtcontact'];
header("location:login.php");
}







if(isset($_POST['btnLogin'])) {
	if($_SESSION['namee']== $_POST['txtNamee']) {

		if($_SESSION['txtpasss']== $_POST['passa']) {

			$_SESSION['message'] ="Login Sucessfully";
			header("location:login.php");
		} else {
		
		$_SESSION['message'] = "Incorrect Password"; 
           header("location:login.php");
		}


	}else{$_SESSION['message'] ="This Account does not exist!";
         header("location:login.php");
	} 



	

}




 ?>