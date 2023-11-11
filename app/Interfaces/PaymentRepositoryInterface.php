<?php

namespace App\Interfaces;

interface PaymentRepositoryInterface
{
    public function getAllPayments();
    public function getPaymentById($id);
    public function createPayment(array $data);
    public function updatePayment(array $data, $id);
    public function deletePayment($id);
}
