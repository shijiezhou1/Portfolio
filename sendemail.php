<?php
/**
 * Created by Jay.
 * Date: 5/28/18
 * Time: 6:04 PM
 * In order to prevent the mail go to spam, you need to complete more info
 * and variables.
 */

$to =  "cs5129606@gmail.com";  //email receiver
$from = "cs5129606@gmail.com";  //email sender
$headers = "From who?: $from\n"; //From who
$message = "Enter the message on the body that you want to send";
$subject = "This is not Spam, it is test of mail"; //subject of email
if ( mail($to,$subject,$message,$headers) ) { //send!
    echo "The email has been sent!";
} else {
    echo "The email has failed!";
}

?>