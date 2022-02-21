<?php
if ((isset($_POST['news_mail'])) && (strlen(trim($_POST['news_mail'])) > 0)) {
	$news_mail = stripslashes(strip_tags($_POST['news_mail']));
} else {$news_mail = 'No email subscription entered';}
ob_start();
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<table width="550" border="1" cellspacing="2" cellpadding="2">
  <tr bgcolor="#eeeeff">
    <td>Email subscription</td>
    <td><?=$news_mail;?></td>
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
$mail->FromName = "Your Site name";
$mail->AddAddress("example@yourdomain.com", "Your name");      //change to your email address

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject  =  "Email subscription for newsletter";
$mail->Body     =  $body;
$mail->AltBody  =  "This is the text-only body";

if(!$mail->Send()) {
	$recipient = 'example@yourdomain.com';    //change to your email address
	$subject = 'Contact form failed';
	$content = $body;	
  mail($recipient, $subject, $content, "From: mail@yourdomain.com\r\nReply-To: $email\r\nX-Mailer: DT_formmail");
  exit;
}
?>
