<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_GET['vkey'])) {
	$getvkey = $_GET['vkey'];
$resultSet = " SELECT verified,vkey FROM pasalese_users WHERE verified = 0 AND vkey ='$getvkey' LIMIT 1";
$verify_query_run = mysqli_query($conn, $resultSet);


if (mysqli_num_rows($verify_query_run) > 0) {

	$row = mysqli_fetch_array($verify_query_run);
	if ($row['verified'] == 0) {
			$sqlupdate = " UPDATE pasalese_users SET verified = 1 WHERE vkey = '$getvkey' LIMIT 1";
			$update_query_run = mysqli_query($conn,$sqlupdate);

			if ($update_query_run) {
				echo "Your account has been successfully!!.  You may login in now.";
       			 header('location: ../html/verification-confirm-page.php');
       			 exit(0);

			}else{
				echo "Verification is failed.";
        		header('location: ../html/index.php');
        		exit(0);


			}
	}
	else{
		echo "Email already verified.";
        header('location: ../html/index.php');

	}


		
}
else{
	$_SESSION['status'] ="this token does not exist";
    header('location: ../html/index.php');
}



}




?>