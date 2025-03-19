<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHospitalRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nombre' => 'sometimes|string|max:255',
            'especialidad' => 'sometimes|string|max:255',
            'atencion' => 'sometimes|string',
            'direccion' => 'sometimes|string|max:255',
            'barrio' => 'sometimes|string|max:255',
            'comuna' => 'sometimes|string|max:255',
            'telefono' => 'nullable|string|max:50',
            'fax' => 'nullable|string|max:50',
            'sitio_web' => 'nullable|url|max:255',
            'gestion' => 'sometimes|string|max:255',
            'geometria' => 'sometimes|string', // Puede ser cambiado a un tipo más adecuado si se almacena como JSON o coordenadas
        ];
    }
}
