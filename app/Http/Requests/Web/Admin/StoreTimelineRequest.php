<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreTimelineRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|string',
            'description'   => 'required|string',
            'date'          => 'required|date',
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
            'title.required'        => 'Nama Schedule timeline harus diisi.',
            'title.string'          => 'Nama Schedule timeline harus berupa string.',
            'description.required'  => 'Deskripsi timeline harus diisi.',
            'description.string'    => 'Deskripsi timeline harus berupa string.',
            'date.required'         => 'Tanggal timeline harus diisi.',
            'date.date_format'      => 'Format tanggal tidak sesuai.',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }
}
