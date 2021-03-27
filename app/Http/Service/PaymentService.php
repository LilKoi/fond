<?php

namespace App\Http\Service;

use App\Http\Repository\PaymentRepository;

class PaymentService
{
    protected $rep;
    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->rep = $paymentRepository;
    }

    public function getPayment()
    {
        return $this->rep->getPayment();
    }

    public function startPayment(array $data)
    {
        return $this->rep->createPayment($data);
    }

    public function responcePayment(array $data)
    {
        return $this->rep->updatePayment($data);

    }

}