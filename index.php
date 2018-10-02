<?php

// this line loads the library
require_once 'Twilio/autoload.php';
//require ('Twilio.php');
//using REST API
use Twilio\Rest\Client;

//Using Twilio Account authentication and token
$sid    = "AXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "0XXXXXXXXXXXXXXXXXXXXXXXX";
$twilio = new Client($sid, $token);

//Detail Information
echo "<strong>----- SMS Details: -----</strong> </br> ";
echo "<strong>Sender:</strong> +19XXXXXXXXX </br>";
echo "<strong>Recipient:</strong> +19XXXXXXXXX </br>";
echo "<strong>Message:</strong> Hello from AASHUTOSH SINGH CS 643 Fall 2018 </br>";

$message = $twilio->messages
    ->create("+19XXXXXXXXX", // to
        array(
            "from" => "+19XXXXXXXXX",
            "body" => "Hello from AASHUTOSH SINGH CS 643 Fall 2018"
        )
    );

print($message->sid);
