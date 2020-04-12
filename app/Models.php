<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Models extends Model
{
    use SoftDeletes;

    protected $table="models";
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        "make_id",
        'icon',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function categories()
    {
        return static::pluck('name', 'id');
    }
}
