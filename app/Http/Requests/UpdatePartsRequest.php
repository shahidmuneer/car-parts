<?php

namespace App\Http\Requests;

use App\Part;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePartRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('part_edit');
    }

    public function rules()
    {
        return [
           
        ];
    }
}
