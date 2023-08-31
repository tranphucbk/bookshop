<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';


if(isset($_POST["send"])){
	$mail = new PHPMailer(true);
 
    $mail->isSMTP();                                            //
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP 
    $mail->SMTPAuth = true;                               // Enable SMTP 
    $mail->Username = 'trandangphuc.hd@gmail.com';                 
    $mail->Password = 'cphktvukxumjkvcd';                           
    $mail->SMTPSecure = 'ssl';                            // Enable
    $mail->Port = 465;                                    // TCP 
    $mail->setFrom('trandangphuc.hd@gmail.com');
    
    $mail->addAddress($_POST['email']);           // 
 

    $mail->isHTML(true);                                 //Set email 
    $mail->Subject =$_POST['subject'];
    $mail->Body=$_POST['message'];

    $mail->send();
    
}
?>