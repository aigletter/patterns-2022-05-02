<?php

namespace patterns\Adapter;

class Mailer implements MailerInterface
{
    public function sendMail($to, $message)
    {
        echo 'Email to ' . $to . ' with message ' . $message . ' was sent successfully' . PHP_EOL;
    }
}