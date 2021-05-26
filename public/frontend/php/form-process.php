<?php

ini_set( "display_errors" , "on");
error_reporting(E_ALL);
//echo mail("m.umairrazaq@gmail.com","test", "hell") ?"sent" :"error";

$errorMSG = "";

// NAME
$txtname ="name";
$txtemail = "text@info.com";
$txtmessage = "Hello";

$EmailTo = "m.umairrazaq@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $txtname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $txtemail;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $txtmessage;
$Body .= "\n";

// send email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Sender <test@me.com> ' . "\r\n";
$headers .=   "Reply-To: test@htmlbeans.com" . "\r\n";
$headers .= "X-Mailer: PHP/" . PHP_VERSION . "\r\n";

$success = mail($EmailTo, $Subject, $Body, $headers );

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
        print_r(error_get_last());
    } else {
        echo $errorMSG;
    }
}

?>