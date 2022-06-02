<?php

namespace patterns\Adapter;

interface MailerInterface
{
    public function sendMail($to, $message);
}