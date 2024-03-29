<?php 
require './libs/PHPMailer/src/Exception.php';
require './libs/PHPMailer/src/PHPMailer.php';
require './libs/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
// require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	$mail->CharSet = 'UTF-8';
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';;                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'd3tmobilebk@gmail.com';                     // SMTP username
    $mail->Password   = 'd3t123456789';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('yenttph07868@fpt.edu.vn', 'Trần Thị Yên');
    $mail->addAddress('vinhnguyenba217@gmail.net', 'Vinh Pokemon');     // Add a recipient
    $mail->addAddress('namnvph08169@fpt.edu.vn', 'NamNV');               // Name is optional
    $mail->addReplyTo('quoc26102000@gmail.com', 'Quốc LB');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PT14313 - ThienTH - tự gửi mail cho mình';
    $mail->Body    = '<h2>Something wrong!</h2>';
    $mail->AltBody = 'Nội dung đc hiển thị khi mạng yếu';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 ?>