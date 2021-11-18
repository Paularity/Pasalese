<?php
session_start();
include "dbh.inc.php";
include "function.php";

if (isset($_GET['vkey']) && isset($_GET['email'])) {

	$vKey = $_GET['vkey'];
	$Email_p = $_GET['email'];

	$sql_p = "SELECT * FROM pasalese_users WHERE email=? AND vkey=? AND vkey<>'' AND vkey_expired>NOW()";
	$stmt_p = mysqli_stmt_init($conn);


	mysqli_stmt_bind_param($stmt_p, "ss", $vKey, $Email_p);
	mysqli_execute($stmt_p);
	$get_result = mysqli_stmt_get_result($stmt_p);

	if (mysqli_num_rows($get_result) > 0) {

		if (isset($_POST['action']) && $_POST['action'] == 'change') {
			
		$email_change = mysqli_real_escape_string($conn,$_POST['Email_change']);
		$password1 = mysqli_real_escape_string($conn,$_POST['New_Password']);
		$password2 = mysqli_real_escape_string($conn,$_POST['Confirm_Password']);
		$num = preg_match('@[0-9]@', $password1);
		$uppercase = preg_match('@[A-Z]@', $password1);
		$lowercase = preg_match('@[a-z]@', $password1);

		if ($password1 !== $password2) {
			echo "Password not match.";
			exit();	
			}
		elseif (strlen($password1) < 8 || !$num || !$uppercase || !$lowercase) {
			echo "Password Must Be A Minimum Of 8 Characters, at least 1 number, 1 uppercase, and 1 lowercase";
	        exit();
		}
		else{
			$sql = "SELECT * FROM pasalese_users WHERE email = ?";
			$stmt = mysqli_stmt_init($conn);

			if (!mysqli_stmt_prepare($stmt,$sql)) {
			    header('location: ../html/signup.php?error=sql1');
			    exit();
			    }

				mysqli_stmt_bind_param($stmt, 's', $email_change);
				mysqli_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				if (mysqli_num_rows($result) === 1) {
				$passwordhashed = password_hash($password1, PASSWORD_DEFAULT);
				
				$sqlupdate = "UPDATE pasalese_users SET password= '$passwordhashed', vkey='' WHERE email= '$email_change'";
				$stmt_run = mysqli_query($conn,$sqlupdate);
				echo "change";
				exit();
				}
				else{
					echo "Something went wrong.";
					exit();
					}
			}
			mysqli_stmt_close($stmt);
			mysqli_close($conn);		
}
		else{
			echo "something went wrong";
			exit();
		}
}else{
	echo "expired";
}

}else{
	echo "none";
}
?>