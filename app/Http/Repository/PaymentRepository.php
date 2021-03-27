<?php
namespace App\Http\Repository;
use App\Models\Payment;
use Illuminate\Support\Collection;
class PaymentRepository
{
    protected $model;
    public function __construct(Payment $payment)
    {
        $model = $this->model = $payment;
    }

    public function getPayment():Collection
    {
        return $this->model->get();
    }

    public function createPayment(array $data)
    {
        $model = new Payment($data);
        $model->save();
        return $model;
    }

    public function updatePayment(array $data)
    {
        $model = $this->findPayment($data['id']);
        $model->update($data);
        return $model;
    }

    public function findPayment(int $id)
    {
        return $this->model->find($id);
    }
}