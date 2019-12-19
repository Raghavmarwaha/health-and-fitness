
<?php
 error_reporting(0);
require_once "vendor/autoload.php";
use Twilio\Rest\Client;
 echo " Your request for appointment has reached us, will get back to you shortly.";
 session_start();


$account_sid = "AC7f0cbe89bdd34747b4fe7d984c5779d5";
$auth_token = "80b1febdc2be86ca6b9bea263530a294";
$twilio_phone_number = "+19892641775";

$client = new Client($account_sid, $auth_token);

//$_SESSION['dname']=$_GET['dname'];
if (isset($_GET['dname'])){
$client->messages->create(
    '+917009126836',
    array(
        "from" => $twilio_phone_number,
        "body" => "Mr. {$_SESSION['name']}, age {$_SESSION['age']} of {$_SESSION['city']} has requested to book an appointment with {$_GET['dname']}"
    )
);
}

echo '<script language="javascript">';
echo 'alert("You requested to book an appointment with doctor,we will contact with doctor, on which dates she will be free annd tell you further about that in your given mail id within one or two days ")';
echo '</script>';


?>


