<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee_type extends Model
{
    use SoftDeletes;
    protected $table = 'fee_type';
   	protected $fillable = [
        'fee_type_id','fee_type_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
