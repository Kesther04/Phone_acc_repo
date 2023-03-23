
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

    headermove();
    function headermove() {
        
    
        $(".first-sec-div").css({'opacity':'0','animation':'first-sec-load var(--first-sec-load-time) ease-in var(--nav-load-time)','animation-fill-mode': 'forwards','transform': 'scale(0)'});
    
        $(".after-fs-div").css({'animation':'after-fs-load var(--after-fs-load-time) ease-in var(--nav-load-time)','animation-fill-mode': 'forwards','transform': 'scale(0)'});
    
        $(".container").css({'opacity':'0','animation':'con-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});

        
    
        $(".fst-snd").css({'opacity':'0','animation':'fst-snd-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});
        
        $(".lr-div").css({'opacity':'0','animation':'fst-snd-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});

        $(".fst-inner-fst-purchase-div").css({'opacity':'0','animation':'fst-snd-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time))','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});

        $(".thr-inner-fst-purchase-div").css({'opacity':'0','animation':'fst-snd-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time))','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});

        $(".fst-inner-thr-purchase-div").css({'opacity':'0','animation':'fst-snd-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});

        $(".snd-purchase-div").css({'opacity':'0','animation':'fst-snd-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});

        $(".thr-sec-div").css({'opacity':'0','animation':'snd-sec-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});
    
        $(".last-sec-div").css({'opacity':'0','animation':'snd-sec-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});
    
        $("footer").css({'opacity':'0','animation':'snd-sec-load var(--after-fs-load-time) ease-in calc(var(--nav-load-time) + 200ms)','animation-fill-mode': 'forwards','transform': 'translateY(-20px)'});
    }
});

