<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'         => 'required|string|max:50',
            'description'   => 'required|string',
            'thumb'         => 'required|string',
            'price'         => 'required|string|max:10',
            'series'        => 'required|string|max:50',
            'sale_date'     => 'required|date',
            'type'          => 'required|string|max:50',
            'artists'       => 'required',
            'writers'       => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'        => 'Il campo Comic name è obbligatorio.',
            'title.max'             => 'Il campo deve avere massimo 50 caratteri',
            'description.required'  => 'Il campo Description è obbligatorio.',
            'thumb.required'        => 'Il campo Comic Cover è obbligatorio.',
            'price.required'        => 'Il campo Price è obbligatorio',
            'price.max'             => 'Il campo deve avere massimo 10 caratteri',
            'series.required'       => 'Il campo Series è obbligatorio.',
            'series.max'            => 'Il campo deve avere massimo 50 caratteri',
            'sale_date.required'    => 'Il campo Sale Date è obbligatorio.',
            'sale_date.date'        => 'Il campo Sale Date non è valido.',
            'type.required'         => 'Il campo Type è obbligatorio.',
            'type.max'              => 'Il campo deve avere massimo 50 caratteri',
            'artists.required'      => 'Il campo Artists è obbligatorio.',
            'writers.required'      => 'Il campo Writers name è obbligatorio.',
        ];
    }
}
