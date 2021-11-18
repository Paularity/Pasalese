<?php
session_start();

if(isset($_POST['submit'])){

    $firstname = strtolower($_POST['Firstname']);
    $lastname = strtolower($_POST['Lastname']);
    $email = $_POST['Email'];
    $number = $_POST['Number'];
    $address = $_POST['Address'];
    $gender = $_POST['Gender'];
    $password = $_POST['Password'];
    $conpassword = $_POST['Conpassword'];
    $num = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    

    $vkey = md5(rand());


    include_once 'dbh.inc.php';
    include_once 'function.php';
   

      
    if (userInputEmpty($firstname,$lastname,$email,$number,$address,$gender,$password,$conpassword) !== false) {
        $_SESSION['status'] ="Please fill up .";
         header('location: ../html/index.php?error=emptyinput');
        exit();
    }
    elseif(invalidEmail($email) !== false){
        $_SESSION['status'] ="Invalid email format";
        header('location: ../html/index.php?error=invalidemail');
        exit(); 
    }
    elseif(pwdmatch($password,$conpassword) !== false){
        $_SESSION['status'] ="The confirm password does not match.";
            header('location: ../html/index.php?error=passwordnotmatch');
        exit();
    }
    elseif(pwdSecurity($password, $num, $uppercase, $lowercase) !== false){
        $_SESSION['status'] ="Password Must Be A Minimum Of 8 Characters, at least 1 number, 1 uppercase, and 1 lowercase";
        header('location: ../html/index.php?error=passwordmustcontain');
        exit();
    }
    elseif(emailExist($conn, $email) !== false){
        $_SESSION['status'] ="Email is taken.";
        header('location: ../html/index.php?error=emailExist');
        exit();
    }
    elseif(numberExist($conn, $number) !== false){
        $_SESSION['status'] ="Phone number is already exist in the databases.";
        header('location: ../html/index.php?error=numberExist');
        exit();
    }
    else{
        createUser($conn,$firstname, $lastname, $email, $number, $address, $gender,$password,$vkey);
    }




}else{
echo "<h4 class='error'>there is a problem</h4>";

}
?>