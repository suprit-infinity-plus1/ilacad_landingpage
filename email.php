<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];
$city = $_POST['city'];

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://sanjarcrm.com/api/leads/submit',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'name' => $name,
        'contact' => $phone,
        'message' => $message,
        'email' => $email,
        'location' => $city,
        'extra' => 'demo.ilacad.org.in',
        'table_alias' => 'demo_ilacad_org_in',
        'api_key' => '5b04913e414e2652abca3cdb0e199e01',
    )
));

$resp = curl_exec($curl);
curl_close($curl);

echo '<script language="javascript"> window.location.href = "https://demo.ilacad.org.in/thank-you.html"; </script>';
?>