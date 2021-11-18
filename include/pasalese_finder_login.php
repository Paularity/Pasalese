<?php 
session_start();
if (isset($_POST['submit'])) {
			
		$email = $_POST['Email'];
		$password = $_POST['Password'];

		include_once 'dbh.inc.php';
		include_once 'function.php';


		if (userLoginEmpty($email,$password) !== false) {
			$_SESSION['status'] ="Email and password.";
			header("location: ../html/index.php?error=emptyinput");
			exit();
		}
		else{
			userLogin($conn, $email, $password);
		}

		

		}
		

 ?>