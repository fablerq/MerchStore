<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'title' => 'required|min:5',
            'image' => 'nullable|required|image64:jpeg,jpg,png',
            'product_id' => 'required|exists:products,id'
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
            'title.required' => 'Заглавие фотографии не может быть пустым',
            'title.min' => 'Минимальная длина названия фотографии 5 символов',
            'image.required' => 'Изображение обязательно',
            'image.image64' => 'Это не изображение. Загрузите изображение формата jpeg,jpg,png',
            // 'image.dimensions' => 'Ширина и высота изображения должны находиться в диапазоне 100-3000',
            //'image.max' => 'Изображение не должно быть больше 4 мегабайт',
            'product_id.exists' => 'Такого товара не существует',
            'product_id.required' => 'Поле с товаром обязательно',
        ];
    }
}
