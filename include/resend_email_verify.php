<?php

require_once('../PHPMailer/PHPMailerAutoload.php');
include "dbh.inc.php";


function resend_verification_email($firstname,$lastname,$email,$vkey){


		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '587';
		$mail->isSMTP(true);
		$mail->Username = 'jaimeancheta270@gmail.com';
		$mail->Password = 'pogiace123';
		$mail->SetFrom('Pasalese_bale@gmail.com','Pasalese bale');
		$mail->Subject = 'Resend E-mail ';
		$mail->addAddress($email);

		$email_template = " http://localhost/Pasalese_bale/include/verify.php?vkey=$vkey";
		$mail->Body = $email_template; 
		$mail->Send();

}

if (isset($_POST['action']) && $_POST['action'] == 'verify') {

		$email_resend = $_POST['Email_resend'];

		$sql_e = "SELECT * FROM pasalese_users WHERE email = ? LIMIT 1";
		$stmt = mysqli_stmt_init($conn);
 		if (!mysqli_stmt_prepare($stmt,$sql_e)) {
             echo "sql error";
             exit();
        }

		mysqli_stmt_bind_param($stmt, 's', $email_resend);
		mysqli_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		if (mysqli_num_rows($result) > 0) {
			
			$row = mysqli_fetch_array($result);
			

			if ($row['verified'] == 0) {
				
				$firstname = $row['firstname'];
				$lastname = $row['lastname'];
				$email = $row['email'];
				$vkey = $row['vkey'];

				resend_verification_email($firstname,$lastname,$email,$vkey);
				echo "Please check your email";
		        exit();


			}
			else{
				echo "The email is already register. Please login!";
		        exit();
			}
		} else{
			echo "please register your email";
	        exit();
		}
}
else{
	echo "none";
}



