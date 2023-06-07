<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        if ($this->method() == 'POST') {
            return [
                'name' => ['required', 'string', 'max:250'],
                'slug' => ['nullable', 'string', 'unique:products,slug', 'max:250'],
                'price' => ['required', 'numeric', 'integer', 'min:10000'],
                'file' => ['required'],
                'category_id' => ['required', 'exists:categories,id'],
                'brand_id' => ['required', 'exists:brands,id'],
                'description' => ['required', 'string']
            ];
        }

        if ($this->method() == 'PUT' or $this->method() == 'PATCH') {
            return [];
        }

        return [];
    }
}
