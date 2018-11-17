<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination_type extends Model
{
    use SoftDeletes;
    protected $table = 'examination_type';
   	protected $fillable = [
        'examination_type_id','examination_type_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
