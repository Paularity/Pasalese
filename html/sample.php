<?php  
$page_title = "Confirm page";

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
    .a-back{
        padding: 0.75rem 1.75rem;
        background-color: #008CBA;
        color: white;
        text-decoration: none;
        font-weight: 700;
    }
    .a-back:hover{
        background-color: rgb(34, 231, 133);
        transition: all 350ms;
    }   
    .resetPass{
        unset: all;
        width: 650px;
        max-width: 80%;

    }
    .site-background{
     
        display: flex;
        justify-content: center;
    }

</style>
<div class="site-background ">
    <div class="box-container resetPass " id="reset-password">
        <div class="holder-form">
            <div class="container">
                <h2>This link is expired!</h2>
                <a href="index.php" class="a-back">Back</a>
            </div>       
        </div>
    </div>
</div>

