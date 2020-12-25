<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailRequest extends FormRequest
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
            'size' => 'required',
            'ram' => 'required',
            'capacity' => 'required',
            'sim' => 'required',
            'screen_size' => 'required',
            'pin' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'size.required' => 'Size is Required',
          'ram.required' => 'RAM is Required',
          'capacity.required' => 'Capacity is Required',
          'sim.required' => 'SIM is Required',
          'screen_size.required' => 'Screen-Size is Required',
          'pin.required' => 'PIN is Required',
        ];
    }
}
