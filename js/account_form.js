$(document).ready(function () {
     var form = $("#acc-form");

    $("#lname").keyup(function () {
        var fna = $("#fname").val();
        var lna = $("#lname").val();
        var b = fna+' '+lna;
        $("#disname").val(b);
    })

    
})