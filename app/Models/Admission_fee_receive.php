<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission_fee_receive extends Model
{
    use SoftDeletes;
    protected $table = 'admission_fee_receive';
   	protected $fillable = [
        'fee_receive_id','fee_catagory_id','amount','year','month','admission_id','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
