<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
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
        // $data=["total"=>"0","fecha"=>$fecha_actual,"motivo"=>'',"hora_inicio"=>1,"hora_final"=>2,"ubicacion"=>0,"planta"=>0,"capacidad"=>50];

        return [
            'total' => [
                'required', 'numeric','between:10,500'
            ],
            'fecha' => [
                'required', 'date',"after:yesterday"
            ],
            'motivo' => [
                'required', 'min:5','max:120','regex:/^[\pL\s\-]+$/u'
            ],
            'capacidad' => [
                'required', 'numeric','between:50,100'
            ],
        ];
    }
}
