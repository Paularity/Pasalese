<?php
include_once 'dbh.inc.php';

class ExpertCrudHelperClass
{
    private $db;

    public function __construct()
    {
        $this->db = new PasaleseDatabaseConnection;
    }

    public function insertAccount($email, $password, $con_pass)
    {
        $tableName = 'p_expert_account';

        $insert_data = array(
            'email' => mysqli_real_escape_string($this->db->conn, $email),
            'password' => mysqli_real_escape_string($this->db->conn, $password),
            'con_pass' => mysqli_real_escape_string($this->db->conn, $con_pass),
        );
        $this->db->insert($tableName, $insert_data);
    }

    public function insertServiceDetails($service_name, $service_type, $description, $service_address, $service_area, $capture_sample_work, $capture_certi, $capture_validID)
    {
        $tableName = 'p_service_details';

        $insert_data = array(
            'service_name' => mysqli_real_escape_string($this->db->conn, $service_name),
            'service_type' => mysqli_real_escape_string($this->db->conn, $service_type),
            'description' => mysqli_real_escape_string($this->db->conn, $description),
            'service_address' => mysqli_real_escape_string($this->db->conn, $service_address),
            'service_area' => mysqli_real_escape_string($this->db->conn, $service_area),
            'capture_sample_work' => mysqli_real_escape_string($this->db->conn, $capture_sample_work),
            'capture_certi' => mysqli_real_escape_string($this->db->conn, $capture_certi),
            'capture_validID' => mysqli_real_escape_string($this->db->conn, $capture_validID),
        );
        $this->db->insert($tableName, $insert_data);
    }

    public function insertPersonalDetails($firstname, $lastname, $number, $profile_pic, $work_experience)
    {
        $tableName = 'p_personal_details';

        $insert_data = array(
            'firstname' => mysqli_real_escape_string($this->db->conn, $firstname),
            'lastname' => mysqli_real_escape_string($this->db->conn, $lastname),
            'number' => mysqli_real_escape_string($this->db->conn, $number),
            'profile_pic' => mysqli_real_escape_string($this->db->conn, $profile_pic),
            'work_experience' => mysqli_real_escape_string($this->db->conn, $work_experience),
        );
        $this->db->insert($tableName, $insert_data);
    }

    public function insertGcashPayment($account_name, $account_number)
    {
        $tableName = 'p_expert_gcash';

        $insert_data = array(
            'account_name' => mysqli_real_escape_string($this->db->conn, $account_name),
            'account_number' => mysqli_real_escape_string($this->db->conn, $account_number),
        );
        $this->db->insert($tableName, $insert_data);
    }
}
