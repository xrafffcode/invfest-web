<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'team_name' => 'required|string',
            'institution' => 'required|string',
            'leader_name' => 'required|string',
            'leader_phone' => 'required|string',
            'leader_card' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'companion_name' => 'nullable|string',
            'companion_card' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'level' => 'required|in:sma/smk,mahasiswa',
            'competition_id' => 'required|exists:competitions,id',
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
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password harus diisi.',
            'password.string' => 'Password harus berupa string.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Password tidak cocok.',
            'team_name.required' => 'Nama tim harus diisi.',
            'team_name.string' => 'Nama tim harus berupa string.',
            'institution.required' => 'Asal sekolah/perguruan tinggi harus diisi.',
            'institution.string' => 'Asal sekolah/perguruan tinggi harus berupa string.',
            'leader_name.required' => 'Nama ketua tim harus diisi.',
            'leader_name.string' => 'Nama ketua tim harus berupa string.',
            'leader_phone.required' => 'Nomor telepon ketua tim harus diisi.',
            'leader_phone.string' => 'Nomor telepon ketua tim harus berupa string.',
            'leader_card.required' => 'Kartu pelajar/kartu mahasiswa ketua tim harus diunggah.',
            'leader_card.image' => 'Kartu pelajar/kartu mahasiswa ketua tim harus berupa gambar.',
            'leader_card.mimes' => 'Kartu pelajar/kartu mahasiswa ketua tim harus berupa gambar dengan format jpg, jpeg, atau png.',
            'leader_card.max' => 'Kartu pelajar/kartu mahasiswa ketua tim tidak boleh lebih dari 2 MB.',
            'companion_name.string' => 'Nama anggota tim harus berupa string.',
            'companion_card.image' => 'Kartu pelajar/kartu mahasiswa anggota tim harus berupa gambar.',
            'companion_card.mimes' => 'Kartu pelajar/kartu mahasiswa anggota tim harus berupa gambar dengan format jpg, jpeg, atau png.',
            'companion_card.max' => 'Kartu pelajar/kartu mahasiswa anggota tim tidak boleh lebih dari 2 MB.',
            'level.required' => 'Jenjang pendidikan harus dipilih.',
            'level.in' => 'Jenjang pendidikan tidak valid.',
            'competition_id.required' => 'Lomba harus dipilih.',
            'competition_id.exists' => 'Lomba tidak ditemukan.',
        ];
    }
}
