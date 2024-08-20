<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'rank' => 'required|integer|min:1',
            'thumb_image_file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max
            'price' => 'required|numeric|min:0',
            'feature_food_key' => 'required',
            'feature_image_file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:5120', // 5MB max
            'description' => 'required',
        ];
    }
}
