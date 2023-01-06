<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => "required",
            'apellido' => "required",
            'fecha_nacimiento' => "required",
            'cedula' => "required",
            'fecha_vencimiento' => "required",
            'numero_licencia' => "required",
            'foto',
            'correo' => "required",
            'direccion' => "required",
            'pass' => "required",
        ];
    }
}
