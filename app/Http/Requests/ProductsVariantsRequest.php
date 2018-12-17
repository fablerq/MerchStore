<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsVariantsRequest extends FormRequest
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
            'product_id' => 'required|exists:products,id',
            'size_id'    => 'required|exists:sizes,id',
            'color_id'   => 'required|exists:colors,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'product_id.exists'   => 'Данного товара не существует',
            'product_id.required' => 'Поле с выбором товаром не может быть пустым',
            'size_id.exists'      => 'Даннго размера не существует',
            'size_id.required'    => 'Поле с выбором размера не может быть пустым',
            'color_id.exists'     => 'Даннго цвета не существует',
            'color_id.required'   => 'Поле с выбором цвета не может быть пустым',
        ];
    }
}
