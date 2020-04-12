<?php

namespace App\Http\Requests;

use App\Models;
use Illuminate\Foundation\Http\FormRequest;

class StoreModelRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('model_create');
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
