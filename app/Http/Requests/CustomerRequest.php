<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:255',
            'dob' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'name.max' => 'The name so long',
            'dob.required' => 'Date Of Birth is required',
            'phone.required' => 'Phone Number is required',
            'phone.numeric' => 'Data entered must be numeric',
            'email.required' => 'Email is required',
            'email.email' => 'Data entered must be email',
            'address' => 'Address is required',
        ];

    }
}
