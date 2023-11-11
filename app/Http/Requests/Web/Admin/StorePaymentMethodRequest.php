<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentMethodRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'logo' => 'required|image',
            'number' => 'required|string',
            'owner' => 'required|string',
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
            'name.required' => 'Nama metode pembayaran harus diisi',
            'logo.required' => 'Logo metode pembayaran harus diisi',
            'logo.image' => 'Logo metode pembayaran harus berupa gambar',
            'number.required' => 'Nomor rekening metode pembayaran harus diisi',
            'owner.required' => 'Nama pemilik rekening metode pembayaran harus diisi',
        ];
    }
}
