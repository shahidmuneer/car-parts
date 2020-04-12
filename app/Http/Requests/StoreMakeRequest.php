<?php

namespace App\Http\Requests;

use App\Make;
use Illuminate\Foundation\Http\FormRequest;

class StoreMakeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('make_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
