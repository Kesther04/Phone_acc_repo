

    var a = 1;
    function backw() {
        var forms = document.getElementById('cart-form');
            var num = document.getElementById('ell-btn-no');
            
        if (a==1) {
            var sub = num.innerHTML=1;
            var prc = (forms.elements['iprice'].value)*sub;
            forms.elements['aiprice'].value = prc;
        }else{
            var kub=num.innerHTML=a--;
            var prc = (forms.elements['iprice'].value)*kub;
            forms.elements['aiprice'].value = prc;
        }
        
                            
    }

    function forw() {
        var forms = document.getElementById('cart-form');
        fa = document.getElementById('ell-btn-no').innerHTML=a++;
        var prc = (forms.elements['iprice'].value)*fa;
        forms.elements['aiprice'].value = prc;
    }

$(document).ready(function () {
   var rum = $(".snd-cart-sec-divs span .ell-btn");
   $(".ell-btn").click(function () {
        if ($("span.active")) {
            
        }
   });
});