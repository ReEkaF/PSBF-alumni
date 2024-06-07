<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PekerjaanRequest extends FormRequest
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
			'id_pekerjaan' => 'required',
			'nim' => 'required|string',
			'perusahaan' => 'string',
			'nama_pekerjaan' => 'string',
			'alamat_perusahaan' => 'string',
			'deskripsi_pekerjaan' => 'string',
			'mulai_bekerja' => 'required',
			'selesai_bekeja' => 'required',
        ];
    }
}
