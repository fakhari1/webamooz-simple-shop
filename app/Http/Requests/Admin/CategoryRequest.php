<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {


        if ($this->method() == 'POST') {
            return [
                'title_fa' => ['required', 'unique:categories,title_fa'],
                'title_en' => ['nullable', 'unique:categories,title_en'],
                'parent_id' => ['nullable']
            ];
        } else if ($this->method() == 'PATCH' || $this->method() == 'PUT') {
            return [];
        }

        return [];
    }
}
