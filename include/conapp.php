<?php
$data = array(
    'username' => 'abcd',
    'password' => '012345678',
	'email' => 'abc@abc.com',
	'phonenumber' => '0811111111'
);

$payload = json_encode($data);

// Prepare new cURL resource
$ch = curl_init('https://mysterious-brook-25806.herokuapp.com/DenOfArtRegister
');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);

// Submit the POST request
$result = curl_exec($ch);

// Close cURL session handle
curl_close($ch);