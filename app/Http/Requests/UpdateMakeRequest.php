<?php

namespace App\Http\Requests;

use App\Make;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMakeRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('make_edit');
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
