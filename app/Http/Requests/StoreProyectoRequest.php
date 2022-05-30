<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyectoRequest extends FormRequest
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
            'nombre'=>'required | min:5 | max:25', 
            'fechaInicio'=>'required', 
            'subtotal'=>'required', 
            'concepto'=>'required | min:5 | max:25', 
            'comentariosAdicionales'=>'required | max: 500', 
            'proveedor'=>'required | min:5 | max:30', 
            'cliente'=>'required | min:5 | max:30'
        ];
    }
}
