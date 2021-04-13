<?php

include_once('classes/SMS.php');

$sms = new SMS();

$contacts = array("+254707393954", "+254727143163");
$message ="Testing sending to more than one number"; 
$response = $sms->send_sms($contacts, $message);

var_dump($response); 
