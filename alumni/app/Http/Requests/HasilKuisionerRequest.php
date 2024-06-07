<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HasilKuisionerRequest extends FormRequest
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
			'id_hasil_kuisioner' => 'required',
			'nim' => 'required|string',
			'id_kuisioner' => 'required',
			'hasil_kuisioner1' => 'string',
			'hasil_kuisioner2' => 'string',
			'hasil_kuisioner3' => 'string',
			'hasil_kuisioner4' => 'string',
			'hasil_kuisioner5' => 'string',
			'hasil_kuisioner6' => 'string',
			'hasil_kuisioner7' => 'string',
			'hasil_kuisioner8' => 'string',
			'hasil_kuisioner9' => 'string',
			'hasil_kuisioner10' => 'string',
        ];
    }
}
