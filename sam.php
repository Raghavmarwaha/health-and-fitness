<?php

require_once "vendor/autoload.php";
use Twilio\Rest\Client;

$account_sid = "AC7f0cbe89bdd34747b4fe7d984c5779d5";
$auth_token = "80b1febdc2be86ca6b9bea263530a294";
$twilio_phone_number = "+12512501299 ";

$client = new Client($account_sid, $auth_token);

$client->messages->create(
    '+917009126836',
    array(
        "from" => $twilio_phone_number,
        "body" => "xyz requested to book an appointment with Doctor"
    )
);