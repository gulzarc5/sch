<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission_fee_structure extends Model
{
    use SoftDeletes;
    protected $table = 'admission_fee_structure';
   	protected $fillable = [
        'fee_id','fee_type','amount','created_by',
    ];
    protected $dates = ['deleted_at'];
}
