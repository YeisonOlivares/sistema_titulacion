<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            
            'nombre' => 'required|min:2|max:255',
            'run' => 'required|max:255',
            'carrera' => 'required',
            'telefono' => 'required|min:4|max:16',
            'correo' => 'required|unique:estudiantes,correo'. $this->estudiante,
            

        ];
    }
}
