<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission_fee_structure extends Model
{
    use SoftDeletes;
    protected $table = 'admission_fee_structure';
   	protected $fillable = [
        'admission_fee_structure_id','class_id','catagory_id','amount','year','medium_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
