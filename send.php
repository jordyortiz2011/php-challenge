<?php
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC8a4b0a81c6f610f949176be1adb8e5ec';
$auth_token = 'b57f3cbe54aaaba1a64ad6abcc50fd8e';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+16067140906";

$sid = getenv($account_sid);
$token = getenv($auth_token);
$twilio = new Client($account_sid, $auth_token);

//$twilio = new Client($account_sid, $auth_token);
/*$result = $client->messages->create(
// Where to send a text message (your cell phone?)
    '+51943178688',
    array(
        'from' => $twilio_number,
        'body' => 'Hello world 3!'
    )
);*/

$message = $twilio->messages
    ->create("+51943178688", // to
        [
            "body" => "Con api de respuesta 3",
            "from" => $twilio_number,
            "statusCallback" => "http://postb.in/1234abcd"
        ]
    );

var_dump($message->status);
