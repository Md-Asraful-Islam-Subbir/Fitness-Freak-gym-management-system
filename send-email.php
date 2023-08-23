<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $text = $_POST["text"];
    $message = $_POST["message"];

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'asrafulislamsabbir72@gmail.com';
        $mail->Password = 'altwdzuckctzorzi';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // or 'ssl'
        $mail->Port = 465;
        $mail->setFrom('asrafulislamsabbir72@gmail.com', 'contact form');
        $mail->addAddress('asraful17@cse.pstu.ac.bd', 'mera website');

        $mail->isHTML(true);
        $mail->Subject ='Test contact form';
        $mail->Body = "Sender Email - $email <br>Message -$message";
        $mail->send();
        echo '
        <script>
            alert(\'Sent Successfully\');
            document.location.href = "Index.php";
        </script>
        ';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>