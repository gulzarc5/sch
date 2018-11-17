<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use SoftDeletes;
    protected $table = 'examination';
   	protected $fillable = [
        'examination_id','std_id','class_id','examination_name','examination_type_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
