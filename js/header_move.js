
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

                
});

