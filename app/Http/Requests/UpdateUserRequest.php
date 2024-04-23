<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'ชื่อจำเป็นต้องกรอก',
            'name.string' => 'ชื่อต้องเป็นตัวอักษร',
            'name.max' => 'ชื่อต้องมีความยาวไม่เกิน 255 ตัวอักษร',
            'email.required' => 'อีเมลจำเป็นต้องกรอก',
            'email.string' => 'อีเมลต้องเป็นตัวอักษร',
            'email.max' => 'อีเมลต้องมีความยาวไม่เกิน 255 ตัวอักษร',
        ];
    }
}
