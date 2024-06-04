<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("../PHPMailer/src/PHPMailer.php");
require("../PHPMailer/src/Exception.php");
require("../PHPMailer/src/SMTP.php");

function getPHPMailer()
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;


    $mail->Host = "smtp.gmail.com";
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->Username = "nonreply069@gmail.com";
    $mail->Password = "zvpcrutyneacjeak";

    $mail->isHTML(true);

    return $mail;
}
