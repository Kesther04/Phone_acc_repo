$(document).ready(function () {

    $(".feature-div").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_item_feature.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".mat").html(dat); 
                var feat = $('.active');
                var nfeat = feat.next().css({'display':'flex'});
                
                    feat.fadeOut(300).removeClass("active");
                    nfeat.fadeIn(300).addClass("active");
            }
            
        });    
        
        
    });


})