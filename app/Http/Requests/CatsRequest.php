<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|unique:cats', 
            'image'     => 'required|image|dimensions:min_width=400,min_height=267|mimes:jpeg,png|max:1014',
            'icon'      => 'required',
            'color_id'  => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Le nom de la catégorie est obligatoire.',
            'image.required'    => 'Veuillez télécharger une image',
            'image.required'    => 'Veuillez télécharger une image',
            'icon.required'     => 'Veuillez sélectionner une icône',

        ];
    }
}
