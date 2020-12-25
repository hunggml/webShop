<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'type' => 'required|max:50',
            'status' => 'required',
            'price' => 'required|numeric',
            'image'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'name.max' => 'The name so long',
            'type.required' => 'The type is required',
            'type.max' => 'The type so long',
            'status.required' => 'Quantity is required',
            'price.required' => 'Price is required',
            'price.numeric' => 'only number',
            'image.required' => 'Image is required',
        ];

    }

}
