<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
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
            'id' => 'integer',
            'mark' => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'color' => 'required|string|max:50',
            'count' => 'required|integer',
            'price' => 'required|integer',
        ];
    }
}
