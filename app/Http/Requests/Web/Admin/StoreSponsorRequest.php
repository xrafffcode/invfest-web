<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSponsorRequest extends FormRequest
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
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required|url',
            'level' => 'required',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama sponsor tidak boleh kosong',
            'logo.required' => 'Logo sponsor tidak boleh kosong',
            'logo.image' => 'Logo sponsor harus berupa gambar',
            'logo.mimes' => 'Logo sponsor harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'logo.max' => 'Logo sponsor tidak boleh lebih dari 2MB',
            'link.required' => 'Link sponsor tidak boleh kosong',
            'link.url' => 'Link sponsor harus berupa url',
            'level.required' => 'Level sponsor tidak boleh kosong',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'Nama sponsor',
            'logo' => 'Logo sponsor',
            'link' => 'Link sponsor',
            'level' => 'Level sponsor',
        ];
    }
}
