<?php 
$page_title = "Sign up Experts";
include "header.php";
?>
    
    <section class="pasalese-experts">
    <div class="form-experts">

    <div class="pasalese-Signup">
        <h2>Sign Up</h2>

        
    </div>
    <form action="" method="" enctype="multipart/form-data">
    <div class="experts-form login-details">
        <div class="experts-label-head">
        <ul class="active-button">
        <li class="active">
                <span class="round-btn">1</span>
        </li>
        <li>
                <span class="round-btn">2</span>
        </li>
        <li>
                <span class="round-btn">3</span>
        </li>
        <li>
                <span class="round-btn">4</span>
        </li>
        
        </ul>
                <h2>Login Details</h2>
        </div>

        
        <div class="experts-label">
                <label for="">Username</label>
                <input type="text" id="expert-fname" name="username" placeholder="Username">
        </div>
        <div class="experts-label">
                <label for="">Email</label>
                <input type="email" id="expert-fname" name="email" placeholder="Email">
        </div>
        <div class="experts-label">
                <label for="">Password</label>
                <input type="password" id="expert-fname" name="password" placeholder="Password">
        </div>
        <div class="experts-label">
                <label for="">Confirm password</label>
                <input type="password" id="expert-fname" name="conpassword" placeholder="Confirm password">
        </div>
        <div class="btn-next-previous">
       
            <input type="button" value="Next" class="btnnext" name="next">
        </div>
   
   </div>
    <div class="experts-form personal-details">
        <div class="experts-label-head">
        <ul class="active-button">
        <li class="active">
                <span class="round-btn">1</span>
        </li>
        <li class="active">
                <span class="round-btn">2</span>
        </li>
        <li>
                <span class="round-btn">3</span>
        </li>
        <li>
                <span class="round-btn">4</span>
        </li>
        
        </ul>
                <h2>Personal Details</h2>
        </div>
        <div class="personal-details-grid">
        <div class="experts-label">
                <label for="">First name</label>
                <input type="text" id="expert-fname" name="expert-fname" placeholder="First name">
        </div>
        <div class="experts-label">
                <label for="">Last name</label>
                <input type="text" id="expert-fname" name="experts-last" placeholder="Last name">
        </div>
        <div class="experts-label">
                <label for="">Address</label>
                <input type="text" id="expert-fname" name="expert-address" placeholder="Address">
        </div>
        <div class="experts-label">
                <label for="">City</label>
                <select name="experts-city" >
                    <option  value="angeles-city">Angeles City</option>
                    <option  value="none">none</option>
                </select>
                
        </div>
        <div class="experts-label">
                <label for="">Street</label>
                <input type="text" id="expert-fname" name="expert-street" placeholder="Street">
        </div>
        <div class="experts-label">
                <label for="">Contact Number</label>
                <input type="tel" id="Number" name="experts-Number" placeholder="0123-456-7891" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
        </div>
        <div class="experts-label">
                <label for="">Gender</label>
                <select name="Gender" >
                    <option  value="Male">Male</option>
                    <option  value="Female">Female</option>
                </select>
        </div>
        <div class="experts-label">
                <label for="">Birthday</label>
                <input type="date" id="birthday"  name="experts-Birthday">
        </div>
        <div class="experts-label">
                <label for="">Age</label>
                <input type="text" id="expert-fname" name="expert-age" placeholder="Your Age">
        </div>
</div>
        <div class="btn-next-previous">
            <input type="button" value="Previous" class="btnprevious" name="previous">
            <input type="button" value="Next" class="btnnext" name="next">
        </div>

   </div>
   <div class="experts-form service-details">
        <div class="experts-label-head">
        <ul class="active-button">
        <li class="active">
                <span class="round-btn">1</span>
        </li>
        <li class="active">
                <span class="round-btn">2</span>
        </li>
        <li class="active">
                <span class="round-btn">3</span>
        </li>
        <li>
                <span class="round-btn">4</span>
        </li>
        
        </ul>
                <h2>Service Details</h2>
        </div>
        <div class="experts-label">
                <label for="">Choose service type</label>
                <select name="type-service" id="">
                <option value="Select">
                    Select
                </option>
                <option value="electrical wiring">
                Electrical wiring
                </option>
                <option value="">
                </option>
                <option value="">
                </option>
                <option value="">
                </option>
                <option value="">
                </option>
                <option value="">
                </option>
                
                </select>
        </div>
        <div class="experts-label">
                <label for="">Describe your service</label>
                <textarea name="experts-desc-service" id=""></textarea>
        </div>
        <div class="experts-label">
                <label for="">Service area around Angeles City only</label>
                <input type="text" id="" name="experts-service-area">
        </div>
        <div class="experts-label">
                <label for="">Photos of service work</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="experts-label">
                <label for="">Certificate/NCII or Any credentials</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="experts-label">
                <label for="">Valid ID</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="btn-next-previous">
            <input type="button" value="Previous" class="btnprevious" name="previous">
            <input type="button" value="Next" class="btnnext" name="next">
        </div>
   
   </div>
   <div class="experts-form payment-details">
   <div class="experts-label-head">
   <ul class="active-button">
        <li class="active">
                <span class="round-btn">1</span>
        </li>
        <li class="active">
                <span class="round-btn">2</span>
        </li>
        <li class="active">
                <span class="round-btn">3</span>
        </li>
        <li class="active">
                <span class="round-btn">4</span>
        </li>
        
        </ul>
                <h2>Payment Details</h2>
        </div>
        <div class="experts-label">
        <label for="">Gcash link/number</label>
        <input type="text" id="" name="gcash">
        </div>
        <div class="btn-next-previous">
            <input type="button" value="Previous" class="btnprevious" name="previous">
            <input type="submit" value="Submit" class="btnsubmitprocess" name="submit">
        </div>
   </div>
   </form>
    </div>
    </section>
        
<?php 
    include "footer.php";
?>

<script src="../js/multiform.js"></script>

</body>
</html>