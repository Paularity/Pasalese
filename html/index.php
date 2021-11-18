<?php
$page_title = "Home page";
include "header.php";

// check if the user has userID in the session
if (isset($_SESSION['userID'])) {
    header("location:user_profile.php");
}

?>
<section class="container container-1">
    <div class="bg-image"></div>

    <div class="site-background ">

        <div class="box-containers">

            <div class="site-title div2" data-aos="fade-up" data-aos-delay="300">
                <div class="title-holder">

                    <h2>The quick and efficient way to repair malfunction things at your home with the help of skilled handyman</h2>

                </div>
            </div>
            <div class="wrapper-box">
                <div id="error-message" class="div1">
                    <h2 id="result">adasds</h2>
                </div>
                <div style="text-align: center; display: none;" id="spinLoad">
                    <img src="../assets/logo/spinning-loading.gif" style="width: 100px; height: 100px;">
                </div>
                <div class="box-container loginReg " id="login">
                    <div class="holder-form">

                        <div class="user-logo" style="text-align: center; ">
                            <img src="../assets/logo/user-logo.jpg" style="width: 100px; height: 100px">
                        </div>

                        <div class="title">
                            <h2>Log in</h2>
                        </div>
                        <form action="../include/login_signup_process.php" method="post" id="loginfrm" role="form">

                            <input type="Email" id="Email" name="Email" placeholder="Email" required minlength="2" value="<?php if (isset($_COOKIE['Email'])) {
                                                                                                                                echo $_COOKIE['Email'];
                                                                                                                            } ?>">
                            <input type="Password" id="Password" name="Password" placeholder="Password" required minlength="8" value="<?php if (isset($_COOKIE['Password'])) {
                                                                                                                                            echo $_COOKIE['Password'];
                                                                                                                                        } ?>">
                            <button class="btn login-btn" type="submit" name="submit" id="submit">Log in</button>
                            <div class="policy">
                                <input type="checkbox" name="rem" id="customCheck" <?php if (isset($_COOKIE['Email'])) { ?> checked <?php  } ?>>
                                <label for="customCheck">Remenber me</label>

                                <span id="forgot"><a href="#" id="forgot-link">Forgot password?</a></span>
                                <br />
                                <br />
                                <span id="email-link">Did you not receive email?<a href="#" id="email-resend">Resend</a></span>
                                <br />
                                <span> Don't have an account? Signup as
                                    <a href="">Pasalese experts </a> | <a href="#" id="sign-user">User</a>
                                </span>
                            </div>
                        </form>

                    </div>
                </div>

                <!--sign up form -->

                <div class="box-container signup-form" id="signup">
                    <div class="holder-form">

                        <div class="user-logo" style="text-align: center; ">
                            <img src="../assets/logo/user-logo.jpg" style="width: 100px; height: 100px">
                        </div>
                        <div class="title ">
                            <h2>Sign up</h2>
                        </div>


                        <form action="" method="post" id="signupfrm">
                            <div class="signup-grid">
                                <div class="block sig_grid-1">
                                    <input type="text" id="firstname" name="Firstname" placeholder="Enter your first name" required>
                                </div>
                                <div class="block sig_grid-2">
                                    <input type="text" id="lastname" name="Lastname" placeholder="Enter your last name" required>
                                </div>
                                <div class="block sig_grid-3">
                                    <input type="email" id="Email_r" name="Email_r" placeholder="Email" required>
                                </div>
                                <div class="block sig_grid-4">
                                    <input type="tel" id="Number" name="Number" placeholder="0123-456-7891" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required>
                                </div>
                                <div class="block sig_grid-5">
                                    <input type="text" name="Address" id="address" placeholder="Enter your permanent address" required>
                                </div>
                                <div class="block sig_grid-8">
                                    <select name="Gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="block sig_grid-9">
                                    <input type="password" id="pass" name="Password" placeholder="Password" required minlength="8">
                                </div>
                                <div class="block sig_grid-10">
                                    <input type="password" id="cpass" name="Conpassword" placeholder="Confirm Password" required minlength="8">
                                </div>
                            </div>
                            <div class="sign_btn">
                                <button id="btnsignup" class=" btn btn-signup" type="submit" name="submit">Sign up</button>
                                <a class=" btn btn-back">Cancel</a>
                            </div>
                        </form>
                        <div class="policy">
                            <span> Signing up with us, you agree to our
                                <a href=""> Terms of Use </a> and <a href="">Privacy Policy</a>
                            </span>
                            <span> Already have an account? <a href="" id="login1">Login</a>
                                Sign up as <a href="">Service Provider</a>
                            </span>
                        </div>
                    </div>


                </div>

                <!-- reset password -->

                <div class="box-container reset-pas" id="reset-password">
                    <div class="holder-form">

                        <div class="title">
                            <h2>Reset password</h2>
                            <small>to reset your password, enter the email address and we will send reset password instructions on your email</small>
                        </div>

                        <div class="form">
                            <form action="../include/password_change.php" method="post" id="reset_email_frm">
                                <input type="email" id="Email_reset" name="Email_reset" placeholder="Enter your email">
                                <button class="btn" type="submit" name="passChange" id="send_email_reset">Send Password Link</button>
                                <a class=" btn btn-back">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- send verification link -->
                <div class=" box-container ver-email" id="verification-frm">
                    <div class="holder-form">
                        <div class="title">
                            <h2>Resend verification email</h2>
                            <small>enter the email address and we will resend verification email</small>
                        </div>
                        <div class="form">
                            <form action="../include/resend_email_verify.php" method="POST" id="resend-frm">
                                <input type="email" id="Email_resend" name="Email_resend" placeholder="Enter your email" required>

                                <button class="btn btn-resend" type="submit" id="submitResend" name="resend_email">Resend</button>
                                <a class="btn btn-back"> Cancel</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class=" container-services grid-2">

        <div class="service-provider">
            <div class="services service" data-aos="fade-right" data-aos-delay="300">
                <h2>Recommended services</h2>
            </div>
            <div class="services service-1" data-aos="fade-right" data-aos-delay="300">
                <img src="../assets/services/tiles-installation.jpg" alt="post-1">
                <div class="service-name">
                    <h3>Tiles installation</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>

            <div class="services service-3" data-aos="fade-right" data-aos-delay="300">
                <img src="../assets/services/roofing-repair.JPG" alt="post-1">
                <div class="service-name">
                    <h3>Roofing repair</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
            <div class="services service-4" data-aos="fade-left" data-aos-delay="300">
                <img src="../assets/services/house-cleaning.jpg" alt="post-1">
                <div class="service-name">
                    <h3>House cleaning</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
            <div class="services service-5" data-aos="fade-left" data-aos-delay="300">
                <img src="../assets/services/electrical-wiring.PNG" alt="post-1">
                <div class="service-name">
                    <h3>Electrical wiring</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
            <div class="services service-2" data-aos="fade-right" data-aos-delay="300">
                <img src="../assets/services/grease-trap.PNG" alt="post-2">
                <div class="service-name">
                    <h3>Grease trap</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
            <div class="services service-6" data-aos="fade-right" data-aos-delay="300">
                <img src="../assets/services/aircon-repair.PNG" alt="post-1">
                <div class="service-name">
                    <h3>Aircon repair</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
            <div class="services service-7" data-aos="fade-left" data-aos-delay="300">

                <img src="../assets/services/ceilling-install.PNG" alt="post-1">
                <div class="service-name">
                    <h3>Ceilling install</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
            <div class="services service-8" data-aos="fade-left" data-aos-delay="300">
                <img src="../assets/services/faucet-repair.PNG" alt="post-1">
                <div class="service-name">
                    <h3>Faucet repair</h3>
                </div>
                <div class="middle">
                    <div class="text">Read More</div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class=" how-steps">
    <h2 data-aos="fade-in" data-aos-delay="300">How its work</h2>
    <div class="wrapper-steps ">
        <div class="owl-carousel owl-theme steps">

            <div class="step step-1" data-aos="fade-right" data-aos-delay="300">
                <img src="../assets/steps/step-1.PNG" alt="">
                <div class="description">
                    <h3>1. Request Services</h3>
                    <p>Do you need some help? You can tell us what services you need directly from our website.</p>
                </div>
            </div>
            <div class="step step-2" data-aos="fade-left" data-aos-delay="300">
                <img src="../assets/steps/step-2.PNG" alt="">
                <div class="description">
                    <h3>2. Get Connected</h3>
                    <p>Depending on the service, our Pasalese expert will send you their fixed price. Speed, reliability, value and satisfaction is our top priority.</p>
                </div>
            </div>
            <div class="step step-3">
                <img src="../assets/steps/step-3.PNG" alt="">
                <div class="description">
                    <h3>3. Hire & Pay</h3>
                    <p>Hire the right Pasalese expert for your job request. Once the service is completed, you can pay thru GCash.</p>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include "../html/footer.php"; ?>
<script src="../js/mainfinal.js"></script>
</body>

</html>