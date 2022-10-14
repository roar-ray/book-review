<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required_without_all:author,isbn|max:100',
            'author' => 'max:100',
            'isbn' => 'max:13',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'title' => $this->title ?? "",
            'author' => $this->author ?? "",
            'isbn' => $this->isbn ?? "",
        ]);
    }
}
