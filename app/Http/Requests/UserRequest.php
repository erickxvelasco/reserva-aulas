<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *

     */
    public function rules()
    {
        $reglas= [
            'apellidos' => [
                'required', 'min:3','max:50',"regex:/^[\pL\s\-]+$/u"
            ],
            'nombres' => [
                'required', 'min:3',"max:50","regex:/^[\pL\s\-]+$/u"
            ],
            'ci' => [
                'required', 'numeric','digits_between:6,10'
            ],
            'expedido' => [
                ''
            ],
            'domicilio' => [
                'nullable','min:6'
            ],
            'celular' => [
                'nullable','numeric','digits:8'
        ],
        'cargo' => [
            ''
            ],
            'tipo' => [
            'between:1,2'
            ],
            'estado' => [
            'between:1,2'
            ],
            'email' => [
                '' //((new User)->getTable())->ignore($this->route()->user->id ?? null)
            ],
            'password' => [
                ''
            ]
        ];
        switch ($this->method()) {
            case "POST": {
               $reglas['password'] = ['required','min:6'];
               $reglas['email'] = ['required', 'email', 'unique:users,email'];
            }
            case "PATCH":{
                $reglas['password']= ['nullable','min:6'];
                $reglas['email'] = ['required', 'email', 'unique:users,email,'.$this->route('user.id')];
            }
        }
        //dd($reglas);
        return $reglas;
    }
}
