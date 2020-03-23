<?php;

$url = 'https://woop.la/mywoopla/call-control/api/getParam.aspx';
$data = [
  'clientid' => 'DEL003'
  'passphrase' => 'fg2.epw74n89kp'
  'pname' => 'ROUTING001'
];

// Initializes a new cURL session
$curl = curl_init($url);

// 1. Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 2. Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// 3. Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// 4. Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json'
]);

$response = curl_exec($curl);
$response = curl_exec($curl);
echo $response . PHP_EOL;

?>