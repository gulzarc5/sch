<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    use SoftDeletes;
    protected $table = 'admission';
   	protected $fillable = [
        'admission_id', 'std_id','admission_fee_id','year','created_by',
    ];
    protected $dates = ['deleted_at'];
}
