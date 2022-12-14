<?php

namespace App\Http\Requests\game;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
          'title' => 'string',
          'description' => 'string',
          'developer_id' => 'string',
          'date' => 'date_format:Y-m-d',
          'genre' => 'array',
          'platform' => 'array'
        ];
    }
}
