<?php

namespace App\Http\Requests\API;

use App\Models\Product;
use InfyOm\Generator\Request\APIRequest;

class UpdateProductPriceAPIRequest extends APIRequest
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
            'product_id' => 'required',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }
}
