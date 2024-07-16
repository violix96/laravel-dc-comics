<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'description' => 'nullable|string',
            'thumb' => 'nullable|string|max:512',
            'price' => 'required|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ];
    }
}
