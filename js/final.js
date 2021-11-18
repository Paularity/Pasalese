$(document).ready(function () {
  //     //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  // $(".next").click(function(){
  // 	if(animating) return false;
  // 	animating = true;

  // 	current_fs = $(this).parent();
  // 	next_fs = $(this).parent().next();

  // 	//activate next step on progressbar using the index of next_fs
  // 	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  // 	//show the next fieldset
  // 	next_fs.show();
  // 	//hide the current fieldset with style
  // 	current_fs.animate({opacity: 0}, {
  // 		step: function(now, mx) {
  // 			//as the opacity of current_fs reduces to 0 - stored in "now"
  // 			//1. scale current_fs down to 80%
  // 			scale = 1 - (1 - now) * 0.2;
  // 			//2. bring next_fs from the right(50%)
  // 			left = (now * 50)+"%";
  // 			//3. increase opacity of next_fs to 1 as it moves in
  // 			opacity = 1 - now;
  // 			current_fs.css({
  //         'transform': 'scale('+scale+')',
  //         'position': 'absolute'
  //       });
  // 			next_fs.css({'left': left, 'opacity': opacity});
  // 		},
  // 		duration: 800,
  // 		complete: function(){
  // 			current_fs.hide();
  // 			animating = false;
  // 		},
  // 		//this comes from the custom easing plugin
  // 		easing: 'easeInOutBack'
  // 	});
  // });

  $(".previous").click(function () {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = (1 - now) * 50 + "%";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({ left: left });
          previous_fs.css({
            transform: "scale(" + scale + ")",
            opacity: opacity,
          });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: "easeInOutBack",
      }
    );
  });

  $("#next1").on("click", function (e) {
    $("#nameError").text("");
    $("#passError").text("");
    $("#cpassError").text("");
    if ($("#email-account").val() == "") {
      $("#nameError").text("* Email is required");
      return false;
    } else if (!validationEmail($("#email-account").val())) {
      $("#nameError").text("* invalid format");
      return false;
    } else if ($("#pass").val() == "") {
      $("#passError").html("* password is required");
      return false;
    } else if ($("#pass").val().length < 8) {
      $("#passError").html("* password must be 8 characters");
      return false;
    } else if (!chkpass($("#pass").val())) {
      $("#passError").html("* use special character");
      return false;
    } else if ($("#cpass").val() == "") {
      $("#cpassError").html("* confirm is password required");
      return false;
    } else if ($("#cpass").val() != $("#pass").val()) {
      $("#cpassError").html("* confirm password did not matched to password");
      return false;
    } else {
      $("#first").hide();
      $("#second").show();
    }
  });

  $("#next2").on("click", function () {
    $("#serviceNameError").html("");
    $("#typeError").html("");
    $("#descError").html("");
    $("#addressError").html("");
    $("#serviceAreaError").html("");
    $("#sampleWorkError").html("");
    $("#certiError").html("");
    $("#validIdError").html("");

    if ($("#serviceName").val() == "") {
      $("#serviceNameError").html("* Service name is required");
      return false;
    } else if ($("#typeService").val() == "") {
      $("#typeError").html("* Please select service");
      return false;
    } else if ($("#desc").val() == "") {
      $("#descError").html("* Please describe something");
      return false;
    } else if ($("#address").val() == "") {
      $("#addressError").html("* Address is required");
      return false;
    } else if ($("#serviceArea").val() == "") {
      $("#serviceAreaError").html(
        "* Please input your service area around Angeles City"
      );
      return false;
    } else if ($("#sampleWork").val() == "") {
      $("#sampleWorkError").html("* Please provide a sample work");
      return false;
    } else if ($("#certi").val() == "") {
      $("#certiError").html("* Please provide any credentials");
      return false;
    } else if ($("#validId").val() == "") {
      $("#validIdError").html("* Please provide a valid id");
      return false;
    } else {
      $("#second").hide();
      $("#third").show();
    }
  });

  $("#next3").on("click", function () {
    $("#fnameError").html("");
    $("#lnameError").html("");
    $("#phoneError").html("");
    $("#personalAddressError").html("");
    $("#profileError").html("");
    $("#shareWorkError").html("");

    if ($("#fname").val() == "") {
      $("#fnameError").html("* Firstname is required");
      return false;
    } else if ($("#lname").val() == "") {
      $("#lnameError").html("* Lastname is required");
      return false;
    } else if ($("#phone").val() == "") {
      $("#phoneError").html("* Number is required");
      return false;
    } else if ($("#personalAddress").val() == "") {
      $("#personalAddressError").html("* Address is required");
      return false;
    } else if ($("#profile").val() == "") {
      $("#profileError").html("* Photo is required");
      return false;
    } else if ($("#shareWork").val() == "") {
      $("#shareWorkError").html("*  required");
      return false;
    } else {
      $("#third").hide();
      $("#forth").show();
    }

    $("#submit").on("click", function (e) {
      e.preventDefault();

      if ($("#acount").val() == "") {
        $("#acountError").html("*  required");
        return false;
      } else if ($("#accountNumber").val() == "") {
        $("#accountNumberError").html("* Lastname is required");
        return false;
      } else if ($("#reNumber").val() == "") {
        $("#reNumberError").html("* Number is required");
        return false;
      } else {
        $.ajax({
          url: "../include/multiRegForm.php",
          method: "post",
          data: new FormData(this),
          dataType: "json",
          contentType: false,
          cache: false,
          processData: false,
          success: function (response) {
            $(".statusMsg").html("");
            if (response.status == 1) {
              $("#msform")[0].reset();
              $(".statusMsg").html(
                '<p class="alert alert-success">' + response.message + "</p>"
              );
            } else {
              $(".statusMsg").html(
                '<p class="alert alert-danger">' + response.message + "</p>"
              );
            }
          },
        });
      }
    });
  });

  // check the email if valid or not
  function validationEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
  }
  function chkpass($pass) {
    var check = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    return check.test($pass);
  }
});
