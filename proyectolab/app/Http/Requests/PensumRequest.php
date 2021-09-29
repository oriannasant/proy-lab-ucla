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
        'descrip_pensum' => 'required'
        //'date'=>'required|max:50|min:2'
    
        ];
    }

    public function messages(){
        return[
        'id_program.required'=>'Ingresar Codigo del Programa',
        'descrip_pensum.required'=>'Ingresar Descripción ',
        //'date.required'=>'Ingresar Apellido',
        ];
    }

}
