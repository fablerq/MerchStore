<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FavouriteRequest extends FormRequest
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
            'user_id'    => 'required|exists:users,id|unique_with:product_user,product_id',
            'product_id' => 'required|exists:products,id',
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
            'user_id.required'    => 'Чтобы добавить в избранное нужен пользователь!',
            'user_id.exists'      => 'Нельзя добавить данный товар данному пользователю. Пользователя не существует',
            'product_id.required' => 'В избранное нужно добавить что-то конкретное!',
            'product_id.exists'   => 'Нельзя добавить данный товар данному пользователю. Данного товара не существует',
            'user_id.unique_with' => 'Данный товар уже есть в избранном у данного пользователя',
        ];
    }
}
