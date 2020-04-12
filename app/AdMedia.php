<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdMedia extends Model
{

    protected $table="ad_media";
   

    protected $fillable = [
        "ad_id",
        'link',
    ];

   

    
}
