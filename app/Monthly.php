<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monthly extends Model
{
    use SoftDeletes;
    protected $table = 'monthly';
   	protected $fillable = [
        'monthly_id','std_id','fee_type_id','transaction_id','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
