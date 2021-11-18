<?php 
$page_title = "Reset password";
include "../html/header.php"
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
              elseif (isset($_SESSION['status_success'])) {
                echo "<div class= 'sessionStatus_success'>
                        <h4>".$_SESSION['status_success']."</h4>
                        </div>";
                unset($_SESSION['status_success']);
              }
            ?>
          <div class="title sign-up">
            <h2>Reset password</h2>
          </div>
          <hr>
          <div class="form">
            <form action="../include/password_reset.php" method="post">
              <label for="">Email address</label>
              <input type="email" id="Email"  name="Email"placeholder="Email">
              
              <label for="">New Password</label>
              <input type="Password" id="Password" name="New_Password" placeholder=" Password">
              <label for="">Confirm Password</label>
              <input type="Password" id="Password" name="Confirm_Password" placeholder="New Password">
              
              <button class="btn-reset" type="submit" name="password_reset">Submit</button> 
            </form>
          </div>
      </div>
    </section>
<?php 
    include "../html/footer.php";
?>