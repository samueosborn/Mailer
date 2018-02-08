<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('osbornkwame14@gmail.com', 'Python X');
//Set an alternative reply-to address
$mail->addReplyTo('osbornkwame14@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('ekpenyong117@gmail.com', 'Emmanuel');
//Set the subject line
$mail->Subject = '';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'Welcome to Python X!';
//Attach an image file
$mail->addAttachment('logo.jpg');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
