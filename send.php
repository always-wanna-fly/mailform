<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$name = $_POST['form']['name'];
$email = $_POST['form']['email'];
$age = $_POST['form']['age'];
$gender = $_POST['form']['gender'];
$message = $_POST['form']['message'];
$file = $_FILES['myfile'];

require 'templates/message.php';


    //PHPMailer Object

    try {
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'vovaivanitskyi@gmail.com'; // Логин на почте
    $mail->Password   = 'volodimirim312'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('vovaivanitskyi@gmail.com', 'Имя отправителя'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('vovaivanitskyi@gmail.com');


if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикріплений";
        } else {
            $rfile[] = "Не вдалось прикріпити файл $filename";
        }
    }
}
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;


//    $mail->send();

}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

