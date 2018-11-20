<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School_fee_receive extends Model
{
    use SoftDeletes;
    protected $table = 'school_fee_receive';
   	protected $fillable = [
        'school_fee_receive_id','std_id','fee_type','amount','year','month','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
