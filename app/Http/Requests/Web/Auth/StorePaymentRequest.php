<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'payment_method_id' => 'required|exists:payment_methods,id',
            'proof' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'payment_method_id.required' => 'Metode pembayaran harus dipilih.',
            'payment_method_id.exists' => 'Metode pembayaran tidak ditemukan.',
            'proof.required' => 'Bukti pembayaran harus diunggah.',
            'proof.image' => 'Bukti pembayaran harus berupa gambar.',
            'proof.mimes' => 'Bukti pembayaran harus berupa gambar dengan format jpg, jpeg, atau png.',
            'proof.max' => 'Bukti pembayaran tidak boleh lebih dari 2 MB.',
        ];
    }
}
