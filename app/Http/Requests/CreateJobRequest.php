<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
             'category' => 'required|numeric',
             'title' => 'required',
             'type' => 'required',
             'description' => 'required|max:5000',
             'salary' => 'required|numeric',
             'deadline' => 'required|date|after:tomorrow',
             'photo' => 'nullable|image|max:2048'
        ];
    }
}
