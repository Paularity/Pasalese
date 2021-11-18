<?php 
    $page_title = "Login user";
    include "header.php";
?>
    <section class=" login">
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
                <h2>Log in</h2>
            </div>
            <hr>
            <div class="form">
                <form action="../include/pasalese_finder_login.php" method="POST">
                <label for="">Email address</label>
                <input type="email" id="Email"  name="Email"placeholder="Email">
                <label for="">Password</label>
                <input type="Password" id="Password" name="Password" placeholder="Password">
                <button class="btn" type="submit" name="submit">Submit</button> 
                <button class="btn" type="reset" name="reset">Reset</button>
            </form>
            </div>
            <hr>
            <div class="policy">
                <span><a href="password_change.php">Forgot password?</a></span><br/>
                <span>Did you not receive email?<a href="resend_email.php">resend</a></span>
                <span> Don't have an account? Signup as
                <a href="">Pasalese experts </a>| <a href="signup.php">User</a>
                </span>
            </div>
        
        </div>

        <!-- signup page -->

        <div class="signup-form"> 
        <div>   
          <?php 
            
              if (isset($_SESSION['status'])) {
                echo "<div class='sessionStatus'>
                <h4>".$_SESSION['status']."</h4>
                </div>";
                unset($_SESSION['status']);
              }
            ?> 
        </div>
       
        <div class="form">
        <div class="title ">
            <h2>Sign up</h2>
        </div>
           <hr>
           <form action="../include/pasalese_finder_signup.php" method="post">
              <div class="signup-grid">
                <div class="block sig_grid-1">
                  <label for="">First name</label>
                  <input type="text" id="firstname"  name="Firstname"placeholder="Enter your first name">
                </div>

                <div class="block sig_grid-2">
                  <label for="">Last name</label>
                  <input type="text" id="lastname"  name="Lastname"placeholder="Enter your last name">
                </div>

                <div class="block sig_grid-3">
                  <label for="">Email address</label>
                  <input type="email" id="Email"  name="Email"placeholder="Email">
                </div>

                <div class="block sig_grid-4">
                  <label for="">Phone number</label>
                  <input type="tel" id="Number" name="Number" placeholder="0123-456-7891" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
                </div>

                <div class="block sig_grid-5">
                  <label for="">Address</label>
                  <input type="text" name="Address" id="address" placeholder="Enter your permanent address" ></input>
                </div>

                <!-- <div class="block sig_grid-6">
                  <label for="">Birthday</label>
                  <input type="date" id="birthday"  name="Birthday" placeholder="Enter your first name">
                </div> -->
                <div class="block sig_grid-7">
                <label for="">Age</label>
                  <input type="text" id="age"  name="Age" placeholder="Enter your age">
                </div>
                <div class="block sig_grid-8">
                <label for="">Gender</label>
                <select name="Gender" >
                    <option  value="Male">Male</option>
                    <option  value="Female">Female</option>
                </select>
                </div>
                <div class="block sig_grid-9">
                  <label for="">Password</label>
                <input type="Password" id="Password" name="Password" placeholder="Password">
                </div>

                <div class="block sig_grid-10">
                  <label for="">Confirm password</label>
                  <input type="Password" id="ConPassword" name="Conpassword" placeholder="Confirm Password">
                </div>
              </div>
              <div class="sign_btn">
                <button class="btn" type="submit" name="submit">Sign up</button> 
                <button class="btn" type="reset" name="reset">Reset</button></form>
                </div>
</div>
              <hr>
              <div class="policy">
                <span> Signing up with us, you agree to our
                <a href=""> Terms of Use </a> and <a href="">Privacy Policy</a>
                </span>
              </div>
        
              <div class="already-account">
                <span>  Already have an account? <a href="login.php">Login</a>
                  Sign up as <a href="">Service Provider</a>
                </span>
              </div>
        </div>
    </section>
<?php 
    include "footer.php"
?>