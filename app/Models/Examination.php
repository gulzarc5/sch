<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Examination extends Model
{
    use SoftDeletes;
    protected $table = 'examination';
   	protected $fillable = [
        'examination_id','medium_id','class_id','examination_name','examination_type_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
