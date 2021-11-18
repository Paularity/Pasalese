<?php  
$page_title = "Confirm page";
include "header.php";
?>
<style type="text/css">
    .container{
        text-align: center;
    }
    h2,h4{
        padding: 2rem 0;
    }
    h2{
        font-size: 2rem;
    }
    h4{
        font-size: 1.25rem;
    }
    .a-login{
        padding: 0.75rem 1.75rem;
        background-color: #008CBA;
        color: white;
        text-decoration: none;
        font-weight: 700;
    }
    .a-login:hover{
        background-color: rgb(34, 231, 133);
        transition: all 350ms;
    }   
    .resetPass{
        unset: all;
        width: 650px;
        max-width: 80%;

    }

</style>
<div class="site-background ">
    <div class="box-container resetPass " id="reset-password">
        <div class="holder-form">
            <div class="container">
            <h2>Your password is successfully change! </h2>
            <h4>You may login in now.</h4>
            <a href="index.php" class="a-login">Login</a>
            </div>       
        </div>
    </div>
</div>
