<?php
session_start();
include "dbh.inc.php";
include "function.php";



if (isset($_POST['action']) && $_POST['action'] == 'reset') {
	
	$email_reset = $_POST['Email_reset'];
	$vkey = md5(rand());

	$sql_email = "SELECT * FROM pasalese_users WHERE email = ? LIMIT 1";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt,$sql_email)) {
             echo "sql error";
             exit();
        }

	mysqli_stmt_bind_param($stmt,'s', $email_reset);
	mysqli_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	if (mysqli_num_rows($result) > 0) {
			
			$row = mysqli_fetch_array($result);

			$get_firstname = $row['firstname'];
			$get_lastname = $row['lastname'];
			$get_email = $row['email'];

			$update_vkey = "UPDATE pasalese_users SET vkey='$vkey', vkey_expired=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email = '$get_email' LIMIT 1";
			$update_token_run = mysqli_query($conn,$update_vkey);


			if ($update_token_run){				
				send_reset_password($get_firstname,$get_lastname,$get_email,$vkey);
				echo "We E-mail you a password reset link.";
		        exit();
			}else{
				echo "Something went wrong.";
		        exit();
			}
			
	}else{
		echo "The email is not match.";
        exit();
	}
}else{
		echo "Please input the email.";
    	 header('location: ../html/password_change.php');
        

}

?>


