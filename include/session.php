<?php
require "dbh.inc.php";

$userID = $_SESSION['userID'];

$sql = "SELECT * FROM pasalese_users WHERE userID = ?";
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt,$sql)) {
	echo "something went wrong in the databases ";
	exit();
}

else{
	mysqli_stmt_bind_param($stmt, "s", $userID);
	mysqli_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_assoc($result);

	$email = $row['email'];

	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$address = $row['address'];
	$phone_number = $row['phone_number'];
	$gender = $row['gender'];
	

	if (!isset($userID)) {
		header("location: ../html/index.php");
	}

}










?>