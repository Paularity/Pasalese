const responsive = {
  0: {
    items: 1,
  },
  360: {
    items: 1,
  },
  520: {
    items: 2,
  },
  900: {
    items: 2,
  },
};
$(document).ready(function () {
  $nav = $(".nav");
  $togglecollapse = $(".toggle-collapse");

  // click event toggle menu

  $togglecollapse.click(function () {
    $nav.toggleClass("collapse");
  });

  // owl carousel

  $(".owl-carousel").owlCarousel({
    loop: true,
    responsive: responsive,
  });

  // click up

  $(".arrow-up a").click(function () {
    $("html,body").animate(
      {
        scrollTop: 0,
      },
      1000
    );
  });

  $(".form-experts .experts-form .btn-next-previous .next").click(function () {
    $(this).parents(".experts-form").fadeOut("fast");
    $(this).parents(".experts-form").next().fadeIn("fast");
  });
  $(".form-experts .experts-form .btn-next-previous .previous").click(
    function () {
      $(this).parents(".experts-form").fadeOut("fast");
      $(this).parents(".experts-form").previous().fadeIn("fast");
    }
  );

  $("#forgot-link").on("click", function () {
    $("#login").hide();
    $("#error-message").hide();
    $("#reset-password").show();
  });

  $("#sign-user").on("click", function () {
    $("#login").hide();
    $("#reset-password").hide();
    $("#error-message").hide();
    $("#signup").show();
  });

  $("#email-resend").on("click", function () {
    $("#login").hide();
    $("#signup").hide();
    $("#error-message").hide();
    $("#verification-frm").show();
  });

  $("#login1").on("click", function () {
    $("#signup").hide();
    $("#error-message").hide();
    $("#login").show();
  });

  $(".btn-back").on("click", function () {
    $("#error-message").hide();
    $("#Email-resend").val("");
    $("#signup").hide();
    $("#reset-password").hide();
    $("#verification-frm").hide();
    $("#login").show();
  });

  $("#loginfrm").validate();
  $("#resend-frm").validate();
  $("#verification-frm").validate();
  // $("#change_password_frm").validate();
  $("#signupfrm").validate({
    rules: {
      cpass: {
        equalTo: "#pass",
      },
    },
  });

  $("#submit").on("click", function (e) {
    if (document.getElementById("loginfrm").checkValidity()) {
      e.preventDefault();

      $.ajax({
        method: "POST",
        url: "../include/login_signup_process.php",
        datatype: "text",
        data: $("#loginfrm").serialize() + "&action=login",
        success: function (response) {
          if (response === "login") {
            window.location = "../html/user_profile.php";
          } else {
            $("#error-message").show();
            $("#result").html(response);
          }
        },
      });
    }
    return true;
  });
  $("#btnsignup").on("click", function (e) {      
    e.preventDefault();
    console.log(document.getElementById("signupfrm").checkValidity());
    if (document.getElementById("signupfrm").checkValidity()) {      
      $.ajax({
        method: "POST",
        url: "../include/login_signup_process.php",
        datatype: "text",
        data: $("#signupfrm").serialize() + "&action=register",
        beforeSend: function () {
          $("#spinLoad").show();
        },
        success: function (response) {
          if (
            response ===
            "Registration Successfully. Please verify your Email Address."
          ) {
            $("#spinLoad").hide();
            $("#error-message").show();
            $("#result").html(response);

            $("#firstname").val("");
            $("#lastname").val("");
            $("#Email_r").val("");
            $("#Number").val("");
            $("#address").val("");
            $("#pass").val("");
            $("#cpass").val("");
          } else {
            $("#spinLoad").hide();
            $("#error-message").show();
            $("#result").html(response);
          }
        },
        error: function(err) {
            console.log(err);
        }
      });
    }
  });

  $("#submitResend").on("click", function (e) {
    if (document.getElementById("resend-frm").checkValidity()) {
      e.preventDefault();
      $("#spinLoad").show();
      $.ajax({
        method: "POST",
        url: "../include/resend_email_verify.php",
        datatype: "text",
        data: $("#resend-frm").serialize() + "&action=verify",
        success: function (response) {
          $("#spinLoad").hide();
          $("#error-message").show();
          $("#result").html(response);
        },
      });
    }
    return true;
  });

  $("#send_email_reset").on("click", function (e) {
    if (document.getElementById("reset_email_frm").checkValidity()) {
      e.preventDefault();
      $("#spinLoad").show();
      $.ajax({
        method: "POST",
        url: "../include/password_change.php",
        datatype: "text",
        data: $("#reset_email_frm").serialize() + "&action=reset",
        success: function (response) {
          $("#spinLoad").hide();
          $("#Email_reset").val("");
          $("#error-message").show();
          $("#result").html(response);
        },
      });
    }
    return true;
  });

  // $('#btnPassReset').on("click",function(e){
  //     if (document.getElementById("change_password_frm").checkValidity()) {
  //     e.preventDefault();
  //         $('#spinLoad').show();
  //         $.ajax({
  //             method: 'POST',
  //             url: '../include/password_reset.php',
  //             datatype: 'text',
  //             data:$("#change_password_frm").serialize() + "&action=change",
  //             success: function(response){
  //                    if (response === "change") {
  //                     $('#spinLoad').hide();
  //                     window.location = "../html/password_successful_page.php";
  //                 }else if(response === "expired"){
  //                      $('#spinLoad').hide();
  //                     window.location = "../html/sample.php";
  //                 }else{
  //                     $("#error-message").show();
  //                     $("#result").html(response);
  //                 }
  //                 }
  //             });
  //             }
  //     return true;
  // });
});
