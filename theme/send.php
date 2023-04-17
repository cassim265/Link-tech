<?php
ini_set('display_errors', '1');
/*
use PHPMailer\PHPMailer\PHPMailer as PHPMailerPHPMailer;
use phpmailer\PHPMailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\PHPMailer\Exception;

require 'include/Exception.php';
require 'include/PHPMailer.php';
require 'include/SMTP.php';

$mail = new PHPMailerPHPMailer(true);

$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username="cassimkatanga@gmail.com";
$mail->Password="cassim265247";
$mail->Subject="tesing email form";
$mail->setFrom("cassimkatanga@gmail.com");
$mail->Body="this is the tesing empty message";
$mail->addAddress("cassimkatanga@gmail.com");

if($mail->send()){
    echo "email sent";
}else{
    echo "email not sent";
}

$mail->smtpClose();*/
$name=$_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to ="cassimkatanga@gmail.com";
$subject =$_POST['subject'];

$headers=("From:".$name."\r\n"."cc:cassimkadzandira@gmail.com");

$txt = "ase tatheka";

if($email!=null){
    mail($to, $subject,$txt,$headers);
}
?>
