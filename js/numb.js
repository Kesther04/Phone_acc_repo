$(document).ready(function () {
   var a = 1;
   var eid = $(".ell-id");
    
    $(".forw").click(function  forward(eid) {
       
        $('.ell-btn-no').html(a++);
       
    });
    
});

