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
            'product_name' => 'required',
            'product_counts' => 'required|numeric',
            'products_type' => 'required',


            'product_in_prices' => 'required',
            'product_out_prices' => 'required',
            'product_image' => 'required',


            'product_in_prices' => 'required',
            'product_out_prices' => 'required',
            'product_image' => 'required',

            'product_in_prices' => 'required|numeric',
            'product_out_prices' => 'required|numeric',

        ];
    }
}
