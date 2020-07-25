<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);
var_dump($_POST);

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['submit']) && ($_POST['submit'] != 'contact' || $_POST['save'] != 'career')) {
    header('Location: contact.php'); 
    exit;
}
	
// get the posted data
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// check that a name was entered
if (empty($first_name))
    $error = 'You must enter your first name.';
    // check that a name was entered
elseif (empty($last_name))
$error = 'You must enter your last name.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'You must enter a valid email address.';
// check that a phone number was entered
if (empty($phone))
    $error = 'You must enter your phone number.';
// check that a message was entered
elseif (empty($message))
    $error = 'You must enter a message.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
   // header('Location: contact.php?e='.urlencode($error)); //exit;
}

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;           // Enable verbose debug output
    $mail->isSMTP();                                   // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';              // Set the SMTP server to send through
    $mail->SMTPAuth   =  true;                         // Enable SMTP authentication
    $mail->Username   = '';         // SMTP username
    $mail->Password   = '';                  // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                           // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($mail->Username, 'Charter Freight Services');
    //$mail->addAddress('dalvirsahota@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('kriskristoronto@gmail.com');               // Name is optional
    //$mail->addReplyTo('bvb09.soc@gmail.com', 'Information');
    //$mail->addCC('randhawakgagan@gmail.com');
    //$mail->addBCC('gaganrandhawastar@gmail.com');
    $mail->addAddress($mail->Username);
    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ($_POST['submit'] == 'contact' ? "New contact request" : "New hiring/career request");
    $mail->Body    = "<b>Name : </b>".$first_name." ".$last_name."<br>"
                    ."<b>Phone : </b>".$phone."<br>"
                    ."<b>Email : </b>".$email_address."<br>"
                    ."<b>Message : </b>".$message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    //echo 'Message has been sent';
    //header('Location: contact.php?e='.urlencode('Message has been sent'));
} catch (Exception $e) {
    //header('Location: contact.php?e='.urlencode($mail->ErrorInfo));
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// send the user back to the form
header("Location: contact.php?code=200"); 
exit;

?>