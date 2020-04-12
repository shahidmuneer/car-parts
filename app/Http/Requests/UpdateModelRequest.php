<?php

namespace App\Http\Requests;

use App\Models;
use Illuminate\Foundation\Http\FormRequest;

class UpdateModelRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('model_edit');
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
