<?php 
    $page_title = "Send password link";
    session_start();
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
                <h2>Send password link</h2>
            </div>
            <hr>
            <div class="form">
                <form action="../include/password_reset_code.php" method="post">
                    <label for="">Email address</label>
                    <input type="email" id="Email"  name="Email"placeholder="Email">
                    <button class="btn" type="submit" name="password_change">Send Password Link</button> 
                </form>
            </div>
        </div>
    </section>
<?php 
    include "footer.php";
?>