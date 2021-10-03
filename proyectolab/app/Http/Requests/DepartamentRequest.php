<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentRequest extends FormRequest
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
         
            'name_departament' => 'required|max:100|min:2'
        ];
    }
    public function messages(){
        return[
        'name_departament.required'=>'Ingresar Nombre del Deparamento',
       
        ];
    }
}
