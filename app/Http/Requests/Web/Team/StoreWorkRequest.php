<?php

namespace App\Http\Requests\Web\Team;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreWorkRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'url' => 'required|url',
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
            'title.required' => 'Judul karya tidak boleh kosong.',
            'title.string' => 'Judul karya harus berupa string.',
            'url.required' => 'URL karya tidak boleh kosong.',
            'url.url' => 'URL karya harus berupa URL yang valid.',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'team_id' => Auth::user()->teams->first()->id,
        ]);
    }
}
