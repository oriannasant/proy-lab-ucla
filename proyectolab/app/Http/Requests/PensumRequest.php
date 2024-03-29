<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PensumRequest extends FormRequest
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
            
        'id_program' => 'required',
        'descrip_pensum' => 'required',
        'date'=>'required',
        'id_departament' => 'required'
    
        ];
    }

    public function messages(){
        return[
        'id_program.required'=>'Ingresar Código del Programa',
        'descrip_pensum.required'=>'Ingresar Descripción ',
        'date.required'=>'Ingresar Fecha',
        'id_departament.required' =>'Ingresar Código del Departamento',
        ];
    }

}
