
$(document).ready(function(){
    $(".open-div").click(function(){
        $(".header-unit").slideDown(1000).css({'visibility':'visible'});
    });

    $(".close-div").click(function(){
        $(".header-unit").slideUp(1000).css({'visibility':'hidden'});
    });

    $(".open-dash").click(function(){
        $(".dashboard").slideDown(1000).css({'display':'block'});
        $(".open-dash").slideDown(1000).css({'display':'none'});
    });

    $(".close-dash").click(function(){
        $(".dashboard").slideUp(1000).css({'display':'none'});
        $(".open-dash").slideUp(1000).css({'display':'flex'});
    });

    
    $("#like-btn").click(function(){
        $("#liked-btn").fadeIn(300).css({'display':'block'});
        $("#like-btn").fadeOut(300).css({'display':'none'});
    });
    
    $("#liked-btn").click(function(){
        $("#like-btn").fadeIn(300).css({'display':'block'});
        $("#liked-btn").fadeOut(300).css({'display':'none'});
    });

    if ($("#dis-like").html()  > "0") {
        $("#liked-btn").css({'display':'block'});
        $("#like-btn").css({'display':'none'});
    }else{
        $("#like-btn").css({'display':'block'});
        $("#liked-btn").css({'display':'none'});
    }
});

