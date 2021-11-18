<?php

class PasaleseDatabaseConnection
{
	public $conn;
	public $error;
	
	public function __construct()
	{
		$this->conn = mysqli_connect("localhost", "root", "", "pasalese_bale_db");
		if (!$this->conn) {
			echo 'Database Connection Error ' . mysqli_connect_error($this->conn);
		}
	}

	public function insert($table_name, $data)
	{
		$string = "INSERT INTO " . $table_name . " (";
		$string .= implode(",", array_keys($data)) . ') VALUES (';
		$string .= "'" . implode("','", array_values($data)) . "')";
		if (mysqli_query($this->conn, $string)) {
			return true;
		} else {
			echo mysqli_error($this->conn);
		}
	}
}

// $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

// if (!$conn) {
// 	die("connection failed" . mysqli_connect_error());
// }

// function insert($table_name, $data)
// {
//     $string = "INSERT INTO " . $table_name . " (";
//     $string .= implode(",", array_keys($data)) . ') VALUES (';
//     $string .= "'" . implode("','", array_values($data)) . "')";
//     if (mysqli_query($conn, $string)) {
//         return true;
//     } else {
//         echo mysqli_error($conn);
//     }
// }