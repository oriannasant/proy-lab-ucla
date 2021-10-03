<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        'username' => 'required|max:25|min:5',
        'name' => 'required|max:50|min:2',
        'surname'=>'required|max:50|min:2',
        'identification'=>'required|max:50|min:5',
        'telephone'=>'max:25',
        'email'=>'required|max:35|min:4',
        'password'=>'required|max:35|min:4',
        'role'=> 'required',
        'program'=> 'required'
        ];
    }
    public function messages(){
        return[
        'username.required'=>'Ingresar Usuario',
        'name.required'=>'Ingresar Nombre',
        'surname.required'=>'Ingresar Apellido',
        'identification'=>'Ingresar Cédula',
        'telephone'=>'Solo se permiten maximo 10 caracteres',
        'email.required'=>'Ingresar Correo con máximo de 35 caracteres y mínimo 4',
        'password.required'=>'Ingresar Contraseña con máximo de 35 caracteres y mínimo 4',
        'role'=> 'Seleccione un Rol',
        'program'=> 'Seleccione un Programa',
        ];
    }
}
