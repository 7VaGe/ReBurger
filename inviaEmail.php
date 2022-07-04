<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$_SESSION["emailsmtp"] = ''
$_SESSION["passwordsmtp"] = ''

function inviaMail($to, $email, $subject, $message){
  $mail=new PHPMailer();
  $mail-> isSMTP();
  $mail->SMTPAuth= true;
  $mail->SMTPSecure="tls";
  $mail->Host="smtp.office365.com";
  $mail->Port=587;
  $mail->SMTPDebug = 3;
  $mail->Username = $_SESSION["emailsmtp"];
  $mail->Password = $_SESSION["passwordsmtp"];
  $mail->setFrom($_SESSION["emailsmtp"], 'ReBurger');
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

function inviaNewsletter($email, $subject, $message){
  $mail=new PHPMailer();
  $mail-> isSMTP();
  $mail->SMTPAuth= true;
  $mail->SMTPSecure="tls";
  $mail->Host="smtp.office365.com";
  $mail->Port=587;

  $mail->Username = $_SESSION["emailsmtp"];
  $mail->Password = $_SESSION["passwordsmtp"];

  $mail->setFrom($_SESSION["emailsmtp"], 'ReBurger');
  $mail->AddAddress("$email", "Gentile cliente");
  $mail->FromName="ReBurger";
  $mail->Subject ="$subject";
  $mail->AltBody ="...";
  $mail->MsgHTML($message);
  $mail->IsHTML(true);
}
?>
