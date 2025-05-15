<?php

namespace App\Filament\Resources\DosenResource\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDosenRequest extends FormRequest
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
			'nip' => 'required|string',
			'nama' => 'required|string',
			'email' => 'required|string',
			'tanggal_lahir' => 'required|date',
			'jenis_kelamin' => 'required|string',
			'alamat' => 'required|string'
		];
    }
}
