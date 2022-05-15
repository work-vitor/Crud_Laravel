<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEditora extends FormRequest
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
            'nome' => 'required | max:100 | min: 1',
            'local' => 'required | max: 100 | min: 1',
            'site' => 'required | max: 80 | min: 1',
            'email' => 'required | max: 80 | min: 1'
        ];
    }
}
