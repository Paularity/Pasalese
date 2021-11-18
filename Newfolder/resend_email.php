<?php 
    $page_title = "Resend";
    include "header.php";
?>
    <section class="login">
        <div class="login-form">
             <?php 
                if (isset($_SESSION['status'])) {
                echo "<div class= 'sessionStatus'>
                        <h4>".$_SESSION['status']."</h4>
                        </div>";
                unset($_SESSION['status']);
                }
            ?>
            <div class="title">
                <h2>Resend verification email</h2>
            </div>
                <hr>
            <div class="form">
                <form action="../include/resend_email_verify.php" method="POST">
                <input type="email" id="Email"  name="Email" placeholder="Enter your email"> 
                <button class="btn" type="submit" name="resend_email">Resend</button> 
                </form>
            </div>    
        </div>
    </section>
<?php 
    include "footer.php";
?>