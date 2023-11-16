<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMediaPartnerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required|url|max:255',
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
            'name.required' => 'Nama media partner tidak boleh kosong',
            'name.string' => 'Nama media partner harus berupa string',
            'name.max' => 'Nama media partner tidak boleh lebih dari :max karakter',
            'logo.image' => 'Logo media partner harus berupa gambar',
            'logo.mimes' => 'Logo media partner harus berupa gambar dengan format jpg, jpeg, atau png',
            'logo.max' => 'Logo media partner tidak boleh lebih dari :max KB',
            'link.required' => 'Link media partner tidak boleh kosong',
            'link.url' => 'Link media partner harus berupa URL',
            'link.max' => 'Link media partner tidak boleh lebih dari :max karakter',
        ];
    }
}
