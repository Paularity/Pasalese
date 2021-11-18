<?php include 'header.php'; ?>
<!-- multistep form -->
<form id="msform" action="" method="POST" enctype="multipart/form-data">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Account Setup</li>
        <li>Social Profiles</li>
        <li>Personal Details</li>
        <li>Transaction</li>
    </ul>

    <div class="statusMsg"></div>


    <!-- fieldsets -->

    <!-- <fieldset id="first">
        <h2 class="fs-title">Create your account</h2>
        <input type="text" name="email" placeholder="Email" id="email-account" />
        <div class="jqErrorStyle" id="nameError"></div>

        <input type="password" name="pass" placeholder="Password" id="pass" />
        <div class="jqErrorStyle" id="passError"></div>
        <input type="password" name="cpass" placeholder="Confirm Password" id="cpass" />
        <div class="jqErrorStyle" id="cpassError"></div>
        <input type="button" name="next" class="next action-button" id="next1" value="Next" />
    </fieldset>
    <fieldset id="second">
        <h2 class="fs-title">Service details</h2>
        <input type="text" name="expertsServiceName" placeholder="Enter service name" id="serviceName">
        <div class="jqErrorStyle" id="serviceNameError"></div>
        <div class="label">
            <label>Choose service type</label>
            <select name="type-service" id="typeService">
                <option value=""></option>
                <option value="electrical wiring">Electrical wiring</option>
                <option value="House cleaning">House cleaning</option>
                <option value=" Roofing repair"> Roofing repair</option>
                <option value="electrical wiring">Ceiling installtion</option>
                <option value="House cleaning">Faucet installation/repair</option>
                <option value=" Roofing repair">Furniture repair</option>

            </select>
        </div>
        <div class="jqErrorStyle" id="typeError"></div>
        <textarea name="desc" placeholder="Describe your service" id="desc"></textarea>
        <div class="jqErrorStyle" id="descError"></div>
        <input type="text" name="expertsAddress" placeholder="Service location / Address" id="address">
        <div class="jqErrorStyle" id="addressError"></div>
        <input type="text" name="expertsServiceArea" placeholder="Service area" id="serviceArea">
        <div class="jqErrorStyle" id="serviceAreaError"></div>
        <div class="label">
            <label>Sample photos of work</label>
            <input type="file" name="file_sampleWork" id="sampleWork">
        </div>
        <div class="jqErrorStyle" id="sampleWorkError"></div>

        <div class="label">
            <label>Certificate/NCII or Any credentials</label>
            <input type="file" name="file_certi" id="certi">
        </div>
        <div class="jqErrorStyle" id="certiError"></div>

        <div class="label">
            <label>Valid ID</label>
            <input type="file" name="file_validId" id="validId">
        </div>
        <div class="jqErrorStyle" id="validIdError"></div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" id="next2" />
    </fieldset> -->
    <!-- <fieldset id="third">
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">Tell us a bit about yourself.
            This information will appear on your public profile,
            so that potential buyers can get to know you better.</h3>
        <input type="text" name="fname" placeholder="First Name" id="fname" />
        <div class="jqErrorStyle" id="fnameError"></div>
        <input type="text" name="lname" placeholder="Last Name" id="lname" />
        <div class="jqErrorStyle" id="lnameError"></div>
        <input type="text" name="phone" placeholder="Phone" id="phone" />
        <div class="jqErrorStyle" id="phoneError"></div>
        <input name="address" placeholder="Address" id="personalAddress">
        <div class="jqErrorStyle" id="personalAddressError"></div>
        <div class="label">
            <label>Profile photo</label>
            <input type="file" name="file_profile" id="profile">
        </div>
        <div class="jqErrorStyle" id="profileError"></div>
        <textarea name="experience" placeholder="Share a bit about your work experience, 
    cool project you've completed, an dyour area of expertise" id="shareWork"></textarea>
        <div class="jqErrorStyle" id="shareError"></div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" id="next3" value="Next" />
    </fieldset> -->
    <fieldset id="forth">
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">Tell us a bit about yourself.
            This information will appear on your public profile,
            so that potential buyers can get to know you better.</h3>
        <input type="text" name="fname" placeholder="First Name" id="fname" />
        <div class="jqErrorStyle" id="fnameError"></div>
        <input type="text" name="lname" placeholder="Last Name" id="lname" />
        <div class="jqErrorStyle" id="lnameError"></div>
        <input type="text" name="phone" placeholder="Phone" id="phone" />
        <div class="jqErrorStyle" id="phoneError"></div>
        <input name="address" placeholder="Address" id="personalAddress">
        <div class="jqErrorStyle" id="personalAddressError"></div>
        <div class="label">
            <label>Profile photo</label>
            <input type="file" name="file_profile" id="profile">
        </div>
        <div class="jqErrorStyle" id="profileError"></div>
        <textarea name="experience" placeholder="Share a bit about your work experience, 
    cool project you've completed, an dyour area of expertise" id="shareWork"></textarea>
        <div class="jqErrorStyle" id="shareError"></div>
        <!-- <h2 class="fs-title">Transaction</h2>
        <h3 class="fs-subtitle">Your information is safe to us. <br> On receiving online payments on Pasalese bale, we need a verified G-Cash account to transfer the amount to you</h3>
        <input type="text" name="Aname" placeholder="Account name" id="account" />
        <div class="jqErrorStyle" id="accountError"></div>
        <input type="text" name="Anumber" placeholder="Account number" id="accountNumber" />
        <div class="jqErrorStyle" id="accountNumberError"></div>
        <input type="text" name="Rnumber" placeholder="Re-enter account number" id="reNumber" />
        <div class="jqErrorStyle" id="reNumberError"></div> -->

        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" id="submit" value="Submit" />
    </fieldset>
</form>

<!-- <script src="../js/jquery3.6.0.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-2.0.0.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/gh/jquery-form/form@4.3.0/dist/jquery.form.min.js"></script> -->

<script src="../js/final1.js"></script>
<!-- <script> -->


</body>

</html>