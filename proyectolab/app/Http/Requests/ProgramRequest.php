<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramRequest extends FormRequest
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
            
            'name_program' => 'required|max:100|min:2',
            'descrip_program' => 'required'
             
             
        ];
    }

    public function messages(){
        return[
        'name_program.required'=>'Ingresar Nombre del Programa',
        'descrip_program.required'=>'Ingresar Descripción del Programa',
        ];
    }

}
