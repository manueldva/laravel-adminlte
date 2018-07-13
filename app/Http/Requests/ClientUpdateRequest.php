<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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

        $rules = [
            'name' => 'required|unique:clients,name,' . $this->client,
            'address' => 'required',
            'cellPhone' => 'required'
        ];

        if($this->get('phone'))
            $rules = array_merge($rules, ['phone' => 'required']);

        if($this->get('email'))
            $rules = array_merge($rules, ['email' => 'required|email']);



        return $rules;


    }
}
