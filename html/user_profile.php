<?php 
$page_title = "Profile page";
include "header.php";
include "../include/session.php";
?>
<section class="profile profile-section">
<div class="container-profile">
<div class="user-dashboard">
<div class="user-img">
<img src="../images/jaime.jpg" alt="">
<h4 style="color:white;"><?= $firstname.' '.$lastname ?></h4>
</div>
<div class="user-info">
    <ul class="tabs">
       
        <li data-target="#pending"><i class="fas fa-hourglass-half"></i>Pending request</li>
        <li data-target="#recent"><i class="fas fa-history"></i>Recent hired service </li>
        <li data-target="#account" class="active"><i class="fas fa-user-cog"></i>Account setting</li>
    </ul>
</div>

</div>
<div class="blank">
    <div class="personal-col">
   
        <div class="panel personal-info" id="account">
            <div class="banner-name" >
            <h2>Pasalese Finder Information</h2>
            </div>
            <div class="col-2">
            
                <label>Name:</label>
                <div>
                    <p><?=$firstname.' '.$lastname?></p><span><a href="#">edit</a></span>
                </div>

                <label>Address:</label>
                <div>
                    <p><?= $address ?></p><span><a href="#">edit</a></span>
                </div>
            
                <label>Contact number:</label>
                <div>
                    <p><?= $phone_number ?></p><span><a href="#">edit</a></span>
                </div>
            
                <label>Email:</label>
                <div>
                    <p><?= $email ?></p><span><a href="#">edit</a></span>
                </div>
                <label>Gender:</label>
                <div>
                     <p><?= $gender ?></p><span><a href="#">edit</a></span>
                </div>
                       
            </div>
        </div>
        
        <div class="panel active pending-page" id="pending">
            <div class="banner-name">
            <h2>Pending</h2>
            </div>
            <div class="no">
                <h4>No pending request</h4>
            </div>

        </div>
        <div class="panel recent-page" id="recent">
            <div class="banner-name">
            <h2>Recent hired service</h2>
            
            </div>
            <div class="recentrequest">
            <ul class="tab">
                <li data-target="#favorites">Favorites</li>
                <li data-target="#previous" class="active">Previous request</li>
            </ul>
            <hr>
            <div class="panel1 " id="favorites">
                <div class="no">
                    a
                </div>
            </div>
            <div class="panel1 active" id="previous">
                <div class="no">
                  
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
   
 </div>
 </div>


</section>


<?php include 'footer.php' ?>

<script src="../js/tab_profile.js"></script>

</body>
</html>
   