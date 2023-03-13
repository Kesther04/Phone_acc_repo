$(document).ready(function () {
    
    var md = $(".dashboard");
    $('#peon').click(function(){
        md.slideDown(1000).css({'visibility':'visible'});
    })

    $('#losec').click(function(){
        md.slideUp(1000).css({'visibility':'hidden'});
    })

    var b = $(".bil");
    var sh = $(".shp");

    $('#sh-bil').click(function () {
        b.slideToggle(1000).css({'display':'block'});
        $('#sh-bil').css({'display':'none'});
        
    })
    
    $('#sh-shp').click(function () {
        sh.slideToggle(1000).css({'display':'block'});
        $('#sh-shp').css({'display':'none'});
    })

    var onl = $(".onl-pay");
    var bnk = $(".bnk-pay");

    $('.onl-trans').click(function () {
        onl.css({'visibility':'visible'});
    });


    $('.bnk-trans').click(function () {
        bnk.css({'visibility':'visible'});
    });

    $('.inner-pay-mtd-back').click(function () {
        onl.css({'visibility':'hidden'});
        bnk.css({'visibility':'hidden'});
    });
})