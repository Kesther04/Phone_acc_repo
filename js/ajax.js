$(document).ready(function(){

    $(".news_upl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_item_upload.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#masag").css({'visibility':'visible'});
                $(".msa").html(dat);            

            }
            
        });    
    });

    $(".news_upl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_item_update.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#masag").css({'visibility':'visible'});
                $(".msa").html(dat);            

            }
            
        });    
    });

    $(".news_upl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_item_delete.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#masag").css({'visibility':'visible'});
                $(".msa").html(dat);            

            }
            
        });    
    });

    
    $(".news_upl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_item_restore.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#masag").css({'visibility':'visible'});
                $(".msa").html(dat);            

            }
            
        });    
    });

    $(".upd-itm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'item_uploaded.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".seco-div-container").html(dat);            

            }
            
        });    
    });

    
    $(".upd-sel-itm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'item_up_sel.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".item-div-con").html(dat);            

            }
            
        });    
    });

      
    $(".del-sel-itm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'item_del_sel.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".item-div-con").html(dat);            

            }
            
        });    
    });

    $(".res-sel-itm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'item_res_sel.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".item-div-con").html(dat);            

            }
            
        });    
    });

    
    $(".cart-map-for").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_up_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");      

            }
            
        });    
    });

    
    $(".cart-map-back").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_delup_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");      

            }
            
        });    
    });


    $(".cart-map-for").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'cart/backend_up_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");      

            }
            
        });    
    });

    
    $(".cart-map-back").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'cart/backend_delup_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");      

            }
            
        });    
    });

    $(".cart-map-for").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../cart/backend_up_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");      

            }
            
        });    
    });

    
    $(".cart-map-back").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../cart/backend_delup_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");      

            }
            
        });    
    });

    $(".del-itm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'item_del_upload.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".seco-div-container").html(dat);            

            }
            
        });    
    });


    $(".res-itm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'item_res_upload.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".seco-div-container").html(dat);            

            }
            
        });    
    });

    $(".adl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'like/addlike.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                  
                
                    $("#total-div").load("#total-div",function(){
                        $(".dis-like").html(dat);   
        
                    })
                
            }
            
        });    
    });

    $(".ddl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'like/dellike.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {      
                
                    $("#total-div").load("#total-div",function(){
                        $(".dis-like").html(dat);   
        
                    })
                
            }
            
        });    
    });

    $(".cart-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'cart/backend_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {      
                
                $("#total-div").load("#total-div");
                
            }
            
        });    
    });

    
    $(".cart-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../cart/backend_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {      
                
                $("#total-div").load("#total-div");
                
            }
            
        });    
    });

    $(".cart-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_dir_cart.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {      
                
                $("#total-div").load("#total-div");
                
            }
            
        });    
    });

    $(".cartal-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_del_all.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {      
                
                $("#total-div").load("#total-div");
                
            }
            
        });    
    });
    
    $(".adl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../like/addlike.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                
                $("#total-div").load("#total-div",function(){
                    $(".dis-like").html(dat);   
    
                })
            

            }
            
        });    
    });

    $(".ddl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'../../like/dellike.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                
                $("#total-div").load("#total-div",function(){
                    $(".dis-like").html(dat);   
    
                })
              

            }
            
        });    
    });

    
    $(".acc-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_account_details.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".acc-dit").slideDown(300).css({'display':'flex'});
                $(".acc-dit-inner").html(dat);      

            }
            
        });    
    });

     
    $(".add-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_adds.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".acc-dit").slideDown(300).css({'display':'flex'});
                $(".acc-dit-inner").html(dat);      

            }
            
        });    
    });
     
    $(".paykl").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_pay_mtd.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $(".inner-pay-onl").css({'visibility':'visible','color':'blue','font-weight':'bold','text-tranform':'uppercase'});
                $(".inner-pay-onl").html(dat); 
                $(".inner-pay-mtd-back").click(function () {
                    $("#total-div").load("#total-div");      
                });

                

            }
            
        });    
    });
    
    $(".vud").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'backend_view_user.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#masag-cot").fadeIn(700).css({'visibility':'visible'});  
                $(".snd-inner-masag-ct").fadeIn(700).css({'visibility':'visible'});
                $(".msg").html(dat); 
                $(".inner-masag-cot-back").click(function () {
                    $("#masag-cot").fadeOut(700).css({'visibility':'hidden'});
                })  
                

            }
            
        });    
    });
});
