

    var a = 1;
    function backw() {
        var forms = document.getElementById('cart-form');
        var num = document.getElementById('ell-btn-no');
            
        if (a==1) {
            var sub = num.innerHTML=1;
            var prc = (forms.elements['aiprice'].value)*sub;
            forms.elements['iprice'].value = prc;
            forms.elements['no'].value =  (forms.elements['iprice'].value)/(forms.elements['aiprice'].value);
        }else{
            var kub=num.innerHTML=a--;
            var prc = (forms.elements['aiprice'].value)*kub;
            forms.elements['iprice'].value = prc;
            forms.elements['no'].value =  (forms.elements['iprice'].value)/(forms.elements['aiprice'].value);
        }
        
                            
    }

    function forw() {
        var forms = document.getElementById('cart-form');
        var fa = document.getElementById('ell-btn-no').innerHTML=a++;
        var prc = (forms.elements['aiprice'].value)*fa;
        forms.elements['iprice'].value = prc;
        forms.elements['no'].value =  (forms.elements['iprice'].value)/(forms.elements['aiprice'].value);
    }
