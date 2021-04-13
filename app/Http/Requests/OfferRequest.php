<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'name' => 'required | max:100 | unique:offers,name',
            'price' => ' required | numeric',
            'details' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => __('error.name required'),
            'name.max' => __('error.name max   '),
            'name.unique' => __('error.name unique'),
            'price.required' => __('error.price required'),
            'price.numeric' => __('error.price numeric'),
            'details.required' => __('error.details required'),
        ];
    }
}
