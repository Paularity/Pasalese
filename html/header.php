<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Home service repairs">
    <meta name="keyswords" content="Home, service, repairs, maintenance">
    <meta name="author" content="CCA-students">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/logo/favicon.png" type="image/png">
    <title><?php if(isset($page_title)) { echo "$page_title";}?> - Pasalese Bale</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----------font awesome------------>
    <link rel="stylesheet" href="../css/all.css">
    <!------------carousel styles------------>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <!------------Aos styles------------>
    <!-- <link rel="stylesheet" href="../css/aos.css"> -->
    <!------------css styles------------>
    <link rel="stylesheet" href="../css/style1.css">
    <!-- Bootstrap CSS -->    

    <!-- form validation plugin -->
    <script src="../js/jquery3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</head>
<body>
    <nav class="nav" >
        <div class="nav-container flex-row">
            <div class="logo-brand flex-row">
                <span></section><img src="../assets/logo/favicon.png" alt="logo" id="favicon"></span>
                <span><h2><a href="index.php">Pasalese <span>Bale</span></a></h2></span>
            </div>
            <div class="nav-menu">
                <ul class="nav-items">
                    
                    <li class="nav-links"><a href="../html/index.php">Home</a></li>
                   <?php
                    if (isset($_SESSION['userID'])) {

                        echo "<li class='nav-links'><a href='../html/post_service.php'>Pasalese Services</a></li>";
                    }
                    else{
                        echo "<li class='nav-links'><a href=''>Services</a></li>";
                    }

                   ?>    
                    <li class="nav-links"><a href="">About</a></li>
                    <li class="nav-links"><a href="">Contact</a></li>
                
                </ul> 
            </div>
                <?php
                    if (isset($_SESSION['userID'])) {
                        echo'<div class="notif-chat-block"> 
                            <div class="chat-notification ">
                                <a  onclick="notifFunction()" class="notif-icon"><i class="fas fa-bell"></i></a>
                                <div id="notifDropdown" class="notif-content">
                                <div class="notification-banner"><h2 style="padding:0.5rem">Notification</h2></div>
                                    <div class="anoucement"><h4>General</h4>|<h4>Announcement</h4></div>
                                    </div>
                                
                            </div>
                            <div class="chat-notification ">
                                <a  onclick="chatFunction()" class="chat-icon"> <i class="fas fa-comment-dots"></i></a>
                                    <div id="chatDropdown" class="chat-content" >
                                    <div class="notification-banner"><h2 style="padding:0.5rem">Message</h2></div>
                                     </div>
                                     </div>
                                     </div>';            
                    }
                    else{
                        echo'<div class="notif-chat-hidden">
                                <i class="fas fa-bell"></i>
                                <i class="fas fa-comment-dots"></i>
                                     </div>';
                    }
                ?>
            <div class="toggle">
                <?php 

                    if (isset($_SESSION['userID'])) {
                       
                        echo '<div class="dropdown">
                            <div>
                            `<i onclick="myFunction()" class="dropbtn fas fa-user-tie"></i>
                            
                          </div>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="user_profile.php">Profile</a>
                                
                                <a href="#about">Transaction</a>
                             
                                <a href="#contact">History</a>
                                
                                <a href="#contact">Pending</a>
                                
                                <a href="../include/logout.php">Log out</a>
                            </div>
                            </div>';
                     }    
                     ?> 
              </div>
          </div>
</nav>
 
