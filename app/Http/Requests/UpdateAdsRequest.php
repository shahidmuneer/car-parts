<?php

namespace App\Http\Requests;

use App\Type;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAdsRequest extends FormRequest
{
    public function authorize()
    {
        return true; //\Gate::allows('type_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
            'vehicle_type'   => [
                'required',
            ],
            'year'=>[
                "required"
            ],
            "make_id"=>[
                "required"
            ],
            "model_id"=>[
                "required"
            ],
            "type_id"=>[
                "required"
            ],
            "parts_ids"=>[
                "required"
            ],
            "ad_type"=>[
                "required"
            ],
            "price"=>[
                "numeric"
            ],
            "description"=>[
                'required'
            ]
           
        ];
    }
}
