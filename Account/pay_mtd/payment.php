<?php
// ... Initialize variables and prepare data ...
$tx_ref = "Kesther Ogbu"; // Generate a unique transaction reference
$amount = 5000; // The amount to be paid
$currency = "NGN"; // Currency code
$payment_type = "card"; // Payment type (e.g., card, bank transfer, etc.)

// Define the Flutterwave API endpoint (test endpoint)
$url = "https://api.flutterwave.com/v3/charges?type=$payment_type";

// Make the API request to Flutterwave and get the payment page URL
$data = [
    'tx_ref' => $tx_ref,
    'amount' => $amount,
    'currency' => $currency,
    // Add other required parameters as needed
];

$headers = [
    'Authorization: FLWPUBK_TEST-57e403028c2e6be3f80a74015650af7d-X', // Replace with your Flutterwave API key
    'Content-Type: application/json',
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);

// Check if the 'data' key and 'link' key exist in the response
if (isset($result['data']['link'])) {
    $paymentPageUrl = $result['data']['link'];
} else {
    // Handle the case where there is an error in the API response
    $paymentPageUrl = ''; // Set it to an empty string in case of an error
}

// Send the payment page URL in the response
$respond = ['paymentPageUrl' => $paymentPageUrl];

header('Content-Type: application/json');
echo json_encode($respond);
