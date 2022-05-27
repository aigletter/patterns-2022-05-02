<?php

namespace patterns\Decorator;

class OrderManager
{
    protected NotifyInterface $notifier;

    public function __construct(NotifyInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    public function createOrder(array $data)
    {
        $email = $data['email'];
        $order = new Order($data['sum'], $email);
        //$this->db->save($order);
        // ....

        $this->notifier->notify($email, 'Your order was created successfully');
    }
}