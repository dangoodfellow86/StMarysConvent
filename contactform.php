

<?php
    if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

                                          // Set mailer to use SMTP
    $mail->Host = 'smtp.yahoo.com';
    $mail->Port = 465;                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'daniel.goodfellow@yahoo.com';   // SMTP username
    $mail->Password = 'Rawg3ts3!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

    $mail->setFrom = 'daniel.goodfellow';
    $mail->addAddress('Daniel.goodfellow@sky.com');
                    // Add a recipient
    
    
      


    $mail->Subject = 'Hello This is a test';
    $mail->Body    = 'Testing some Mailgun awesomness';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    }