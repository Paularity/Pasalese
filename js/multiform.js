$(document).ready(function(){
    $(".form-experts .experts-form .btn-next-previous .btnnext").click(function(){

    $(this).parents(".experts-form").fadeOut('fast');
    $(this).parents(".experts-form").next().fadeIn('fast');
    
    });
    $(".form-experts .experts-form .btn-next-previous .btnprevious").click(function(){
    
        $(this).parents(".experts-form").fadeOut('fast');
        $(this).parents(".experts-form").prev().fadeIn('fast');
        
        });
});