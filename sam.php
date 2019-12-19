<?php

require_once "vendor/autoload.php";
use Twilio\Rest\Client;

$account_sid = "Add the token id which generates from twilio";
$auth_token = "Add the auth token generates from twilio";
$twilio_phone_number = "phone no of twilio ";

$client = new Client($account_sid, $auth_token);

$client->messages->create(
    '+917009126836',
    array(
        "from" => $twilio_phone_number,
        "body" => "xyz requested to book an appointment with Doctor"
    )
);