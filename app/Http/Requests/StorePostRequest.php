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
            'thumb' => 'required|string|max:512',
            'price' => 'required|string',
            'series' => 'nullable|string',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|string',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ];
    }

    /**
     * messagio di errore della validazione.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => "Il campo :attribute è obbligatorio. Per favore, inserisci un titolo.",
            'thumb.required' => "Il campo :attribute è obbligatorio. Per favore, inserisci un url di un' immagine.",
        ];
    }

    /**
     * modifica attributi
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'nome fumetto',
            'thumb' => 'URL immagine',
        ];
    }
}
