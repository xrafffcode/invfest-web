<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompetitionRequest extends FormRequest
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
            'level' => 'required|string',
            'description' => 'required|string',
            'poster' => 'nullable|image|mimes:jpg,jpeg,png',
            'guidebook' => 'nullable|file|mimes:pdf',
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
            'name.required' => 'Nama kompetisi harus diisi.',
            'name.string' => 'Nama kompetisi harus berupa string.',
            'level.required' => 'Tingkat kompetisi harus diisi.',
            'level.string' => 'Tingkat kompetisi harus berupa string.',
            'description.required' => 'Deskripsi kompetisi harus diisi.',
            'description.string' => 'Deskripsi kompetisi harus berupa string.',
            'poster.image' => 'Poster kompetisi harus berupa gambar.',
            'poster.mimes' => 'Poster kompetisi harus berupa gambar dengan format jpg, jpeg, atau png.',
            'guidebook.file' => 'Guidebook kompetisi harus berupa file.',
            'guidebook.mimes' => 'Guidebook kompetisi harus berupa file dengan format pdf.',
        ];
    }
}
