<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <script type="text/javascript" src="https://sdk.monnify.com/plugin/monnify.js"></script>
</head>
<body>

    <h1>Payment Form</h1>
    
    <div id="paymentForm">
        <p>Customer Name:<input type="text" name="name" id="customerName" required></p>
        <p>Customer Email:<input type="email" name="email" id="customerEmail" required ></p>
        <p>Customer Phone:<input type="number" name="phone" id="customerPhone" required ></p>
        <p>Amount:<input type="number" name="amt" id="amt" required></p>
        <div><button onclick="payWithMonnify()">Pay</button></div>
    </div>

    
    <script>
        function payWithMonnify(){
            //Get the form data
            var customerName = document.getElementById('customerName').value;
            var customerEmail = document.getElementById('customerEmail').value;
            var customerPhone = document.getElementById('customerPhone').value;
            var amt = document.getElementById('amt').value;

            //Grab Unto the upload
            MonnifySDK.initialize(
                {
                    amount: amt,
                    currency: "NGN",
                    reference: "CK_" + Math.floor((Math.random() * 1000000000) + 1),
                    customerName: customerName,
                    customerEmail: customerEmail,
                    customerPhone: customerPhone,
                    apiKey: "MK_TEST_ZZCZTY9R9L",
                    contractCode: 6866288702,
                    paymentDescription: "Test Monnify",
                    isTestMode: true,
                    onComplete: function(){
                        //implement what happens if payment completes
                        const paymentSuccessful = success;
                        if (paymentSuccessful) {
                            window.location.href = "payment_mtd.php";
                        
                        }
                    },
                    
                    onClose: function(data){
                        window.location.href = "pay_gate.php";
                    }
            
                }
            );
        };
    </script>
</body>
</html>
