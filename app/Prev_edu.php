<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prev_edu extends Model
{
    use SoftDeletes;
    protected $table = 'prev_edu';
   	protected $fillable = [
        'pre_edu_id','class','pass_year','created_by',
    ];
    protected $dates = ['deleted_at'];
}
