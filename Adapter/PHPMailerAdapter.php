<?php

namespace patterns\Adapter;

use PHPMailer\PHPMailer\PHPMailer;

class PHPMailerAdapter implements MailerInterface
{
    protected $mailer;

    public function __construct(PHPMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($to, $message)
    {
        $this->mailer->addAddress($to);
        $this->mailer->Body = $message;
        $this->mailer->send();
    }
}