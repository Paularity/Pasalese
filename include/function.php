<?php
require_once('../PHPMailer/PHPMailerAutoload.php');
// require 'dbh.inc.php';

$db = new PasaleseDatabaseConnection;

function invalidEmail($email){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result=true;
		}
		else{
		$result=false;
	}
	return $result;

}
function pwdSecurity($password, $num, $uppercase, $lowercase){
	$result;
	if (strlen($password) < 8 || !$num || !$uppercase || !$lowercase) {
		$result = true;
	}else{
		$result = false;
	}
	return $result;
}

function pwdmatch($password, $conpassword){
	$result;
	if ($password !== $conpassword) {
		$result=true;
		}
		else{
		$result=false;
	}
	return $result;
}

function emailExist( $conn,$email){
	  $sql = "SELECT * FROM pasalese_users Where email = ?;";
       $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt,$sql)) {
             header('location: ../html/signup.php?error=sql1');
             exit();
        }

        mysqli_stmt_bind_param($stmt ,"s", $email);
        mysqli_execute($stmt);
        mysqli_stmt_store_result($stmt);

        $row = mysqli_stmt_num_rows($stmt);

        $result;	
        if ($row>0) {
           $result = true;
        }else{
        	$result = false;
        }
        return $result;

}
function numberExist($conn, $number){

	    $sql = "SELECT * FROM pasalese_users Where phone_number = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt,$sql)) {
             header('location: ../html/index.php?error=sql2');
             exit();
        }

        mysqli_stmt_bind_param($stmt ,"s", $number);
        mysqli_execute($stmt);
        mysqli_stmt_store_result($stmt);

        $row = mysqli_stmt_num_rows($stmt);

        $result;	
        if ($row>0) {
           $result = true;
        }else{
        	$result = false;
        }
        return $result;
}
function sendmail_verify($firstname, $lastname, $email,$vkey){

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
		
		$mail->addAddress($email);
		$mail->Subject = 'Email verification for Pasalese bale';
		$mail->isHTML(true);

		 $email_template = "
		 <h2>this the verification link please click the provided link below</h2>
		 <br>
		 <a href='http://localhost/Pasalese_bale/include/verify.php?vkey=$vkey'>http://localhost/Pasalese_bale/include/verify.php?vkey=$vkey</a>";
		$mail->Body = $email_template; 
		$mail->Send();
}

function send_reset_password($get_firstname,$get_lastname,$get_email,$vkey){
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '587';
		$mail->isSMTP(true);
		$mail->Username = 'jaimeancheta270@gmail.com';
		$mail->Password = 'pogiace123';
		$mail->SetFrom('Pasalese_bale@gmail.com', 'Pasalese bale');
		$mail->Subject = 'Reset password';
		$mail->addAddress($get_email);
		$mail->isHTML(true);

		$email_template = "<h2>This is the reset password link!. <br> Please click the provided link below</h2>
		 	<br>
		 	<a href='http://localhost/Pasalese_bale/html/passSample.php?vkey=$vkey&email=$get_email'>http://localhost/Pasalese_bale/html/passSample.php?vkey=$vkey&email=$get_email</a>";
		$mail->Body = $email_template; 
		$mail->Send();


}

function createUser($conn,$firstname, $lastname, $email, $number,$address,$gender, $password, $vkey){
$sql = "INSERT INTO pasalese_users (firstname,lastname,email,phone_number,address,gender,password,vkey, join_date)
    VALUES(?,?,?,?,?,?,?,?,now());";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "something went wrong in the databases 1";
        exit();
    }
    else{

        $passwordhashed = password_hash($password, PASSWORD_DEFAULT); 
       
        mysqli_stmt_bind_param($stmt,"ssssssss", $firstname, $lastname, $email,$number,$address,$gender,$passwordhashed,$vkey);
        if(mysqli_execute($stmt))
        {

        	 sendmail_verify($firstname, $lastname, $email,$vkey);
        	 echo "Registration Successfully. Please verify your Email Address.";
        	 exit();
        	
       		 
        }   
        }

}


// --------login function-----------


function userLogin($conn, $email, $password){

			$sql = "SELECT * FROM pasalese_users Where email = ?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)) {
				echo "something went wrong in the databases ";
				exit();
			}
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
				if (mysqli_num_rows($result) == 0) {
					echo "wrong email";
					exit();
				}
				
				if ($row = mysqli_fetch_assoc($result)) {
				$passcheck = password_verify($password, $row['password']);
				
				if ($passcheck === false) {
					echo "Wrong passwords.";
					exit();
				}elseif ($passcheck === true) {

						if ($row['verified'] == 1) {
						session_start();

						$_SESSION['userID'] = $row['userID'];
						$_SESSION['email'] = $row['email'];	
						echo "login";

						if (!empty($_POST["rem"])) {
							setcookie ("Email", $_POST["Email"],time()+3600,"/");
							setcookie ("Password", $_POST["Password"],time()+3600,"/");
							
						}else{
							if (isset($_COOKIE["Email"])) {
								setcookie("Email", "", time()-3600,"/");					
							}
							if (isset($_COOKIE["Password"])) {
								setcookie("Password", "", time()-3600,"/");
							}							
						}
						}
						else{
							 echo "please verify your account";
        					 exit();
						}
						
					}
				}
}

