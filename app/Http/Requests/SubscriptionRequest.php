<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
            'name'=>'required|min:3|max:255',
            'surname'=>'required|min:4|max:255',
            'phone'=>'required|min:8|max:8',
            'address'=> 'required|min:8|max:255',
            'pro_storage' =>  'required|min:2|max:2',
        ];
    }

    public function messages()
    {
        return [
            /*'email' => 'Поле email должно содержать корректный email адрес',*/
            'required' => ':attribute meýdançany dolduryň',
            'min' => ':attribute meýdança :min simwoldan az bolmaly däl',
        ];
    }
}
