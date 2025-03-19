<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHospitalRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'atencion' => 'nullable|string',
            'direccion' => 'required|string|max:255',
            'barrio' => 'required|string|max:255',
            'comuna' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:50',
            'fax' => 'nullable|string|max:50',
            'sitio_web' => 'nullable|url|max:255',
            'gestion' => 'nullable|string|max:255',
            'geometria' => 'nullable|string', 
        ];
    }
}
