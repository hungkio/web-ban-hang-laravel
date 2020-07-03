<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RankRequest extends FormRequest
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
            'rank_code' => 'required',
            'bill_count' => 'required',
            'sale_percent'=>'required',
            'total_bills' => 'required',
        ];
    }
}
