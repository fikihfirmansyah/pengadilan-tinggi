<?php
if ((isset($_POST['contact_name'])) && (strlen(trim($_POST['contact_name'])) > 0)) {
	$contact_name = stripslashes(strip_tags($_POST['contact_name']));
} else {$contact_name = 'No contact name entered';}
if ((isset($_POST['contact_email'])) && (strlen(trim($_POST['contact_email'])) > 0)) {
	$contact_email = stripslashes(strip_tags($_POST['contact_email']));
} else {$contact_email = 'No email entered';}
if ((isset($_POST['contact_subject'])) && (strlen(trim($_POST['contact_subject'])) > 0)) {
	$contact_subject = stripslashes(strip_tags($_POST['contact_subject']));
} else {$contact_subject = 'No subject entered';}
if ((isset($_POST['contact_message'])) && (strlen(trim($_POST['contact_message'])) > 0)) {
	$contact_message = stripslashes(strip_tags($_POST['contact_message']));
} else {$contact_message = 'No message entered';}
ob_start();
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<table width="550" border="1" cellspacing="2" cellpadding="2">
  <tr bgcolor="#eeffee">
    <td>Name</td>
    <td><?=$contact_name;?></td>
  </tr>
  <tr bgcolor="#eeeeff">
    <td>Email</td>
    <td><?=$contact_email;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Subject</td>
    <td><?=$contact_subject;?></td>
  </tr>
   <tr bgcolor="#eeeeff">
    <td>Message</td>
    <td><?=$contact_message;?></td>
  </tr>
</table>
</body>
</html>
<?
$body = ob_get_contents();

$to = 'someone@example.com';
$email = 'email@example.com';
$fromaddress = "you@example.com";
$fromname = "Online Contact";

require("phpmailer.php");

$mail = new PHPMailer();

$mail->From     = "mail@yourdomain.com";
$mail->FromName = "Contact Form";
$mail->AddAddress("email_address@example.com","Your Name ");      //change to your email address

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject  =  "Demo Form:  Contact form submitted";
$mail->Body     =  $body;
$mail->AltBody  =  "This is the text-only body";

if(!$mail->Send()) {
	$recipient = 'your_email@example.com';    //change to your email address
	$subject = 'Contact form failed';
	$content = $body;	
  mail($recipient, $subject, $content, "From: mail@yourdomain.com\r\nReply-To: $email\r\nX-Mailer: DT_formmail");
  exit;
}
?>
