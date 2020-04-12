<?php

namespace App\Http\Requests;

use App\Ad;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
        // return \Gate::allows('ad_create');
    }

    public function rules()
    {
        $rules=[
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
            ],
            "terms_and_conditions"=>[
                "required"
            ]
        ];
        $userRules=[
            "name"=>[
                "required"
            ],
            "number"=>[
                "required"
            ],
            "email"=>[
                "required"
            ],
            "address"=>[
                "required"
            ],
            // "password"=>[
            //     "required"
            // ],
            "zip_code"=>[
                "required"
            ]
        ];
        if(!\Auth::check()){
            return array_merge($userRules,$rules);
        }
        return $rules;
    }
}
