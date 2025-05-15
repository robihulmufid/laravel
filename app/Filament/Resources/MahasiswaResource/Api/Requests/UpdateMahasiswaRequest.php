<?php

namespace App\Filament\Resources\MahasiswaResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequest extends FormRequest
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
			'nama' => 'required|string',
			'email' => 'required|string',
			'tanggal_lahir' => 'required|string',
			'jenis_kelamin' => 'required|string',
			'alamat' => 'required|string'
		];
    }
}
