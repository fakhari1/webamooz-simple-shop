<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class BrandRequest extends FormRequest
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


        if ($this->method() == "POST") {
            return [
                'title_fa' => ['required', 'string', 'unique:brands,title_fa'],
                'title_en' => ['nullable', 'string', 'unique:brands,title_en'],
                'file' => ['required', 'mimetypes:image/jpeg,image/png', 'max:250']
            ];
        }

        if ($this->method() == 'PATCH' or $this->method() == 'PUT') {
            return [
                'title_fa' => ['required', 'string', 'unique:brands,title_fa,' . $this->route('brands')->id],
                'title_en' => ['nullable', 'string', 'unique:brands,title_en,' . $this->route('brands')->id],
                'file' => ['nullable', 'mimetypes:image/jpeg,image/png', 'max:250']
            ];
        }


        return [];
    }
}
