<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntidadRequest extends FormRequest
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
            //
            'razonSocial'=>'required | min:5 | max:25',  
            'persona'=>'required',
            'RFC'=>'required | min:5 | max:25', 
            'domicilio'=>'required | min:5 | max:25', 
            'email'=>'required | min: 10 | max: 25', 
            'telefono'=>'required | min:5 | max:10'
        ];
    }
}
