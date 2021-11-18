<?php
// include_once 'dbh.inc.php';
require_once('dbh.inc.php');
include('ExpertCrudHelperClass.php');
// $db = new PasaleseDatabaseConnection;

// spl_autoload_register(function ($class_name) {
//     include $class_name . '.php';
// });

get_declared_classes();

$uploadDir_sample = 'uploads/upload_sample_work/';
$uploadDir_certi = 'uploads/upload_certi/';
$uploadDir_profile = 'uploads/upload_profile/';
$uploadDir_validID = 'uploads/upload_validID/';


$response = array(
    'status' => 0,
    'message' => 'Form submission failed, please try again.'
);

// //personal info
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];
// $experience = $_POST['experience'];
// // $profilePic = $_POST['file_profile'];
// $expertHelper = new ExpertCrudHelperClass;
// // $expertHelper->insertAccount($email, $pass, $cpass);
// // $expertHelper->insertServiceDetails($expertsService, $type_service, $desc, $expertsAddress, $expertsServiceArea, $uploadedFile_sample, $uploadedFile_certi, $uploadedFile_validID);
// $expertHelper->insertPersonalDetails($fname, $lname, $phone, $_FILES["file_profile"]["name"], $experience);

if (isset($_POST['action'])) {
    //account value
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    // service details
    $expertsService = $_POST['expertsServiceName'];
    $type_service = $_POST['type-service'];
    $desc = $_POST['desc'];
    $expertsAddress = $_POST['expertsAddress'];
    $expertsServiceArea = $_POST['expertsServiceArea'];


    //personal info
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $profilePic = $_POST['file_profile'];


    // gcash account

    $Aname = $_POST['Aname'];
    $Anumber = $_POST['Anumber'];
    $Rnumber = $_POST['Rnumber'];

    // Upload file 
    $uploadedFile_sample = 'unsetimage[404].jpeg';
    $uploadedFile_certi = 'unsetimage[404].jpeg';
    $uploadedFile_profile = 'unsetimage[404].jpeg';
    $uploadedFile_validID = 'unsetimage[404].jpeg';

    // Upload file status
    $uploadStatus1 = 1;
    $uploadStatus2 = 1;
    $uploadStatus3 = 1;
    $uploadStatus4 = 1;

    // if (isset($profilePic)) {
    //     $filename = $_FILES["uploadfile"]["name"];
    //     $tempname = $_FILES["uploadfile"]["tmp_name"];
    //     $folder = "image/" . $filename;

    //     if (move_uploaded_file($tempname, $folder)) {
    //         $msg = "Image uploaded successfully";
    //     } else {
    //         $msg = "Failed to upload image";
    //     }
    // }

    //  sample work file process
    // if(!empty($_FILES["file_sampleWork"]["name"])){ 
    //     File path config 
    //     $fileName_sam = basename($_FILES["file_sampleWork"]["name"]); 
    //     $targetFilePath_sam = $uploadDir_sample . $fileName_sam; 
    //     $fileType_sam = pathinfo($targetFilePath_sam, PATHINFO_EXTENSION); 

    //     Allow certain file formats 
    //     $allowTypes_sam = array('jpg', 'png', 'jpeg'); 
    //     if(in_array($fileType_sam, $allowTypes_sam)){ 
    //         Upload file to the server 
    //         if(move_uploaded_file($_FILES["file_sampleWork"]["tmp_name"], $targetFilePath_sam)){ 
    //             $uploadedFile_sample = $fileName_sam; 
    //         }else{ 
    //             $uploadStatus1 = 0; 
    //             $response['message'] = 'Sorry, there was an error uploading your file.'; 
    //         } 
    //     }else{ 
    //         $uploadStatus = 0; 
    //         $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
    //     } 

    //      // CERTI file process

    //     if(!empty($_FILES["file_certi"]["name"])){ 

    //         // File path config 
    //         $fileNameCerti = basename($_FILES["file_certi"]["name"]); 
    //         $targetFilePathCerti = $uploadDir_certi . $fileNameCerti; 
    //         $fileTypeCerti = pathinfo($targetFilePathCerti, PATHINFO_EXTENSION); 

    //         // Allow certain file formats 
    //         $allowTypesCerti = array('jpg', 'png', 'jpeg'); 
    //         if(in_array($fileTypeCerti, $allowTypesCerti)){ 
    //             // Upload file to the server 
    //             if(move_uploaded_file($_FILES["file_certi"]["tmp_name"], $targetFilePathCerti)){ 
    //                 $uploadedFile_certi = $fileNameCerti; 
    //             }else{ 
    //                 $uploadStatus2 = 0; 
    //                 $response['message'] = 'Sorry, there was an error uploading your file.'; 
    //             } 
    //         }else{ 
    //             $uploadStatus3 = 0; 
    //             $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
    //         } 
    //     } 

    //     // validID file process
    //     if(!empty($_FILES["file_validId"]["name"])){ 

    //         // File path config 
    //         $fileName_Id = basename($_FILES["file_validId"]["name"]); 
    //         $targetFilePath_Id = $uploadDir_validID . $fileName_Id; 
    //         $fileType_Id = pathinfo($targetFilePath_Id, PATHINFO_EXTENSION); 

    //         // Allow certain file formats 
    //         $allowTypes_Id = array('jpg', 'png', 'jpeg'); 
    //         if(in_array($fileType_Id, $allowTypes_Id)){ 
    //             // Upload file to the server 
    //             if(move_uploaded_file($_FILES["file_validId"]["tmp_name"], $targetFilePath_Id)){ 
    //                 $uploadedFile_validID = $fileName_Id; 
    //             }else{ 
    //                 $uploadStatus3 = 0; 
    //                 $response['message'] = 'Sorry, there was an error uploading your file.'; 
    //             } 
    //         }else{ 
    //             $uploadStatus = 0; 
    //             $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.'; 
    //         } 
    //     } 

    //     // profile file process

    // if (isset($profilePic)) {

    //     // File path config 
    //     $fileName_pro = basename($_FILES["file_profile"]["name"]);
    //     $targetFilePath_pro = $uploadDir_profile . $fileName_pro;
    //     $fileType_pro = pathinfo($targetFilePath_pro, PATHINFO_EXTENSION);

    //     // Allow certain file formats 
    //     $allowTypes_pro = array('jpg', 'png', 'jpeg');
    //     if (in_array($fileType_pro, $allowTypes_pro)) {
    //         // Upload file to the server 
    //         if (move_uploaded_file($_FILES["file_profile"]["tmp_name"], $targetFilePath_pro)) {
    //             $uploadedFile_profile = $fileName_pro;
    //         } else {
    //             $uploadStatus4 = 0;
    //             $response['message'] = 'Sorry, there was an error uploading your file.';
    //             $uploadedFile_profile = "erroruploading[404].jpeg";
    //         }
    //     } else {
    //         $uploadStatus = 0;
    //         $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
    //         $uploadedFile_profile = "erroruploading[404].jpeg";
    //     }
    // }

    // $profilePic = uploadImage($_FILES['file_profile']);

    if ($uploadStatus1 == 1 &&  $uploadStatus2 = 1 &&  $uploadStatus3 = 1 &&  $uploadStatus4 = 1) {

        $expertHelper = new ExpertCrudHelperClass;

        // $expertHelper->insertAccount($email, $pass, $cpass);
        // $expertHelper->insertServiceDetails($expertsService, $type_service, $desc, $expertsAddress, $expertsServiceArea, $uploadedFile_sample, $uploadedFile_certi, $uploadedFile_validID);
        $expertHelper->insertPersonalDetails($fname, $lname, $phone, $profilePic, $experience);
        // $expertHelper->insertGcashPayment($Aname, $Anumber);          
    }
}

// function uploadImage($img)
// {
//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES[$img]["name"]);
//     $uploadOk = 1;
//     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//     // Check if image file is a actual image or fake image
//     $check = getimagesize($_FILES[$img]["tmp_name"]);
//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }

//     // Check if file already exists
//     if (file_exists($target_file)) {
//         echo "Sorry, file already exists.";
//         $uploadOk = 0;
//     }

//     // Check file size
//     if ($_FILES["fileToUpload"]["size"] > 500000) {
//         echo "Sorry, your file is too large.";
//         $uploadOk = 0;
//     }

//     // Allow certain file formats
//     if (
//         $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//         && $imageFileType != "gif"
//     ) {
//         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//         $uploadOk = 0;
//     }

//     // Check if $uploadOk is set to 0 by an error
//     if ($uploadOk == 0) {
//         echo "Sorry, your file was not uploaded.";
//         // if everything is ok, try to upload file
//     } else {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//             echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//         } else {
//             echo "Sorry, there was an error uploading your file.";
//         }
//     }

//     return $uploadOk == 1 ? $target_file : "error[404].jpeg";
// }

// class ExpertCrudHelperClass
// {
//     private $db;

//     public function __construct()
//     {
//         $this->db = new PasaleseDatabaseConnection;
//     }

//     public function test()
//     {
//         echo "TEST";
//     }

//     public function insertAccount($email, $password, $con_pass)
//     {
//         $insert_data = array(
//             'email' => mysqli_real_escape_string($this->db->conn, $email),
//             'password' => mysqli_real_escape_string($this->db->conn, $password),
//             'con_pass' => mysqli_real_escape_string($this->db->conn, $con_pass),
//         );
//         $this->db->insert('p_expert_account', $insert_data);
//     }
// }

// function insertExpertPersonDetails($conn, $fname, $lname, $number, $profile_pic, $experience)
// {
//     $insert_data = array(
//         'firstname' => mysqli_real_escape_string($conn, $fname),
//         'lastname' => mysqli_real_escape_string($conn, $lname),
//         'number' => mysqli_real_escape_string($conn, $number),
//         'profile_pic' => mysqli_real_escape_string($conn, $profile_pic),
//         'work_experience' => mysqli_real_escape_string($conn, $experience),
//     );
//     $conn->insert('p_personal_details', $insert_data);
// }


// }
