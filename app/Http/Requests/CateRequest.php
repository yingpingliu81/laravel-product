<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'title' => 'required|string',
            'type_slug' => 'required|string',
            'slug' => 'required|unique:cate,slug,'.$this->id,
        ];


    }

    public function messages()
    {
        return [
            'title.required' => 'title is required',
            'type_slug.required' => 'type_slug is required',
            'slug.unique' => 'slug already exists, please re-edit',
        ];
    }
}
