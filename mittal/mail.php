<?php
use PHPMailer\PhpmAILER\PHPMailer;
use PHPMailer\PhpmAILER\Exception;

require'vendor/autoload.php';

$mail =new PHPMailer(true);
try{
	$mail->SMTPDebug= 0 ;
    $mail->Host= 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->username ='spa.c'
}