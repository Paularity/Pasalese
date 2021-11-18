<?php  
$page_title = "Reset password";
require "header.php";

?>       
 

	<div class="change_p">
                <div id="error-message" class="reset-p-message">
                <h2 id="result"></h2>
                </div>
                
            <div class="box-container resetPass " id="reset-password">
                    <div class="holder-form">

                        <div class="title">
                                <h2>Change password</h2>
                                <small>To reset your password, enter the email address and create your new password</small>
                        </div>
                        <div class="form">
                        <form action="../include/password_reset.php" method="POST" id="change_password_frm">            
                                <input type="email" id="Email_change"  name="Email_change" placeholder="Email" required >
                                <input type="Password" id="Password" name="New_Password" placeholder=" Password" required minlength="8"> 
                                <input type="Password" id="Password" name="Confirm_Password" placeholder="New Password" required minlength="8">             
                                <button class="btn btn-reset" type="submit" id="btnPassReset" name="password_reset">Submit</button> 
                                <a class=" btn btn-back" >Cancel</a>
                         </form>
                        </div>
                    </div>
            </div>
        </div>
  


<?php 
include "footer.php";

?>

