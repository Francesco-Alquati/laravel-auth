<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'slug' => 'max:255',
            'cover_image' => ['nullable', 'image', 'max:4084']
        ];
    }
    public function message()
    {
        return [
            'name.required' => "Il nome del progetto è obbligatorio",
            'name.max' => "Il nome del progetto deve essere lungo al massimo :max caratteri",
            'name.unique' => "É già presente un progetto con questo nome",
            'cover_image.image' => "Il file deve essere un immagine",
            'cover_image.size' => "L'immagine deve essere grande massimo 484 Kb",
            'slug.required' => "Lo slug del progetto è obbligatorio",
            'slug.max' => "Lo slug del progetto deve essere lungo al massimo :max caratteri"
        ];
    }
}
