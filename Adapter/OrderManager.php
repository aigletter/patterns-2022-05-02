<?php

namespace patterns\Adapter;

class OrderManager implements CreatableInterface
{
    protected $age;

    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function create(array $data)
    {
        // TODO куча работы

        $this->mailer->sendMail($data['to'], 'Ваш заказ успешно создан');
    }
}