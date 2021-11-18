<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "dbh.inc.php";
require "function.php";

$db = new PasaleseDatabaseConnection;

if (isset($_POST['action']) && $_POST['action'] == 'register')  { 
	$firstname = check_input($_POST['Firstname']);
    $lastname = check_input($_POST['Lastname']);
    $email = check_input($_POST['Email_r']);
    $number = check_input($_POST['Number']);
    $address = check_input($_POST['Address']);
    $gender = check_input($_POST['Gender']);
    $password = check_input($_POST['Password']);
    $conpassword = check_input($_POST['Conpassword']);
    $num = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $vkey = md5(rand());

   

    if(pwdmatch($password,$conpassword) !== false){
    	echo "The confirm password does not match.";
        exit();
    }elseif(pwdSecurity($password, $num, $uppercase, $lowercase) !== false){
       echo "Password Must Be A Minimum Of 8 Characters, at least 1 number, 1 uppercase, and 1 lowercase";
        exit();
    }elseif(emailExist($db->conn, $email) !== false){
       echo "Email is taken.";
        exit();
    }
    elseif(numberExist($db->conn, $number) !== false){
    	echo "Phone number is already exist in the databases."; 
        exit();
    }
    else{
        createUser($db->conn,$firstname, $lastname, $email, $number, $address, $gender,$password,$vkey);
    }
	
}

if (isset($_POST['action']) && $_POST['action'] == 'login') {

		$email = $_POST['Email'];
		$password = $_POST['Password'];
		
		userLogin($db->conn, $email, $password);
		
    }

if (isset($_POST['action']) && $_POST['action'] == 'verify'){
        $emailResend = $_POST['Email-resend'];



}
		
function check_input($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;

}


?>