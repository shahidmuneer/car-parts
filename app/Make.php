<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Make extends Model
{
    use SoftDeletes;

    protected $table="makes";
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        "year",
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
