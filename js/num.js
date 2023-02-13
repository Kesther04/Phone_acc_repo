

    var a = 1;
    function backw() {
        
            var num = document.getElementById('ell-btn-no');
            
        if (a==1) {
            num.innerHTML=1;
        }else{
            num.innerHTML=a--;
        }
       
        
    }

    function forw() {
        document.getElementById('ell-btn-no').innerHTML=a++;
    }
