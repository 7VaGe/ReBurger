<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

function inviaMail($to, $email, $subject, $message){
  $mail=new PHPMailer();
  $mail-> isSMTP();
  $mail->SMTPAuth= true;
  $mail->SMTPSecure="tls";
  $mail->Host="smtp.office365.com";
  $mail->Port=587;
  $mail->SMTPDebug = 3;
  $mail->Username = 'giovanni.pe12@outlook.it';
  $mail->Password = 'gabriella1212';
  $mail->setFrom('giovanni.pe12@outlook.it', 'ReBurger');
  $mail->AddAddress("$email", "$to");
  $mail->FromName="ReBurger";
  $mail->Subject ="$subject";
  $mail->AltBody ="...";
  $mail->MsgHTML($message);
  $mail->IsHTML(true);
  if(!$mail->Send()){
      echo"Mailer Error:".$mail->ErrorInfo;
  }else{
      echo "message has been sent";
  }
}

?>
