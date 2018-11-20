<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School_fee_structure extends Model
{
    use SoftDeletes;
    protected $table = 'school_fee_structure';
   	protected $fillable = [
        'school_fee_structure_id','class_id','fee_type','amount','year','medium_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
