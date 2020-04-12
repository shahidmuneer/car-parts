<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Part extends Model
{
    use SoftDeletes;

    protected $table="parts";
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        "parent_id",
        'name',
        'icon',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function self()
    {
        return $this->belongsTo('App\Part', 'parent_id', 'id');
    }

    public static function categories()
    {
        return static::pluck('name', 'id');
    }
}
