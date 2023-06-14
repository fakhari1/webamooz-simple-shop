<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductGalleryRequest extends FormRequest
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
                'file' => ['required'],
                'file.*' => ['mimetypes:image/jpeg,image/png'],
            ];
        }

        if ($this->method() == 'PATCH' or $this->method() == 'PUT') {
            return [
                'file' => ['nullable'],
                'file.*' => ['mimetypes:image/jpeg,image/png'],
            ];
        }

        return [
            //
        ];
    }
}
