<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\ProductCategory;

class StoreProduct extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'string|nullable',
            'price' => 'required|numeric|min:0',
            'image' => 'image|mimes:jpeg,jpg,png,gif,svg|max:1024',
            'category' => function ($attribute, $value, $fail) {
                if (ProductCategory::find($value) === null) {
                    $fail(trans('validation.category'));
                }
            },
        ];
    }
}
