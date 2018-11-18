<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction_type extends Model
{
    use SoftDeletes;
    protected $table = 'transaction_type';
   	protected $fillable = [
        'transaction_type_id','transaction_type_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
