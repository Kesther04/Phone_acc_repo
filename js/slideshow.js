$(document).ready(function () {


    $(".next").click(function (){
        var currentImg =  $(".active");
        var firstImg = $("#first");
        var nextImg = currentImg.next().css({'display':'flex'});
    
        if (nextImg.length) {
            currentImg.fadeOut(300).removeClass("active");
            nextImg.fadeIn(300).addClass("active");
        }else{
            currentImg.fadeOut(300).removeClass("active");
            firstImg.fadeIn(300).addClass("active");
        }

    });

    $(".prev").click(function(){
        var currentImg =  $(".active");
        var lastImg = $("#last");
        var prevImg = currentImg.prev().css({'display':'flex'});

        if (prevImg.length) {
            currentImg.fadeOut(300).removeClass("active");
            prevImg.fadeIn(300).addClass("active");
        }else{
            currentImg.fadeOut(300).removeClass("active");
            lastImg.fadeIn(300).addClass("active");
        }
        
    });      

    
    setInterval(bb,4000);
    function bb(){
        var currentImg =  $(".active");
        var firstImg = $("#first");
        var nextImg = currentImg.next().css({'display':'flex'});
    
        if (nextImg.length) {
            currentImg.fadeOut(300).removeClass("active");
            nextImg.fadeIn(300).addClass("active");
        }else{
            currentImg.fadeOut(300).removeClass("active");
            firstImg.fadeIn(300).addClass("active");
        }

    } 
});