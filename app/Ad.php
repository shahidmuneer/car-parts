<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes;

    protected $table="ads";
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        "type",
        "title",
        'vehicle_type',
        'year',
        'make_id',
        'model_id',
        "type_id",
        "ad_type",
        "price",
        "negotiable",
        "description",
        "seller_id",
        "location"
    ];
public function make()
{
    return $this->belongsTo('App\Make', 'make_id', 'id');
}
public function model()
{
    return $this->belongsTo('App\Models', 'model_id', 'id');
}
public function type()
{
    return $this->belongsTo('App\Type', 'type_id', 'id');
}
public function media()
{
    return $this->hasMany('App\AdMedia', 'ad_id');
}
public function parts()
{
    return $this->hasMany('App\AdPart', 'ad_id');
}
   
}
