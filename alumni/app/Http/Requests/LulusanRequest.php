<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LulusanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nim' => 'required|string',
			'Nama' => 'required|string',
			'tanggal_lahir' => 'required',
			'Alamat' => 'required|string',
			'jenis_kelamin' => 'required',
			'ipk' => 'required',
			'tahun_masuk' => 'required',
			'tahun_lulus' => 'required',
			'prodi' => 'required|string',
        ];
    }
}
