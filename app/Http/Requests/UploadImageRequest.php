<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadImageRequest extends FormRequest
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
            'image' => [
                'required',
                'image',
                'mimes:jpeg,png',
                'max:250000', 
            ],
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Please choose an image.',
            'image.image' => 'The selected file must be an image.',
            'image.mimes' => 'The image must be in JPEG or PNG format.',
            'image.max' => 'The image size must not exceed 250 MB.',
        ];
    }
}
