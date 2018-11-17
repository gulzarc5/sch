<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $table = 'city';
   	protected $fillable = [
        'city_id', 'state_id', 'city_name',
    ];
    protected $dates = ['deleted_at'];
}
