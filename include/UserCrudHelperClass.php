<?php
include_once 'dbh.inc.php';

class ExpertCrudHelperClass
{
    private $db;

    public function __construct()
    {
        $this->db = new PasaleseDatabaseConnection;
    }

    public function insertUser($email, $lastname, $number, $address, $gender, $password, $conpassword, $vkey)
    {
        $tableName = 'pasalese_users';

        $insert_data = array(
            'firstname' => mysqli_real_escape_string($this->db->conn, $email),
            'lastname' => mysqli_real_escape_string($this->db->conn, $lastname),
            'number' => mysqli_real_escape_string($this->db->conn, $number),
            'address' => mysqli_real_escape_string($this->db->conn, $address),
            'gender' => mysqli_real_escape_string($this->db->conn, $gender),
            'password' => mysqli_real_escape_string($this->db->conn, $password),
            'conpassword' => mysqli_real_escape_string($this->db->conn, $conpassword),
            'vkey' => mysqli_real_escape_string($this->db->conn, $vkey),
            'join_date' => mysqli_real_escape_string($this->db->conn, date("D M d, Y G:i")),
        );
        $this->db->insert($tableName, $insert_data);
    }
}
