<?php

namespace App\Repositories;

use App\Interfaces\PaymentRepositoryInterface;
use App\Models\Payment;

class PaymentRepository implements PaymentRepositoryInterface
{
    public function getAllPayments()
    {
        return Payment::all();
    }

    public function getPaymentById($id)
    {
        return Payment::find($id);
    }

    public function createPayment(array $data)
    {
        return Payment::create($data);
    }

    public function updatePayment(array $data, $id)
    {
        return Payment::find($id)->update($data);
    }

    public function deletePayment($id)
    {
        return Payment::destroy($id);
    }
}
