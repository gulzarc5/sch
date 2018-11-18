<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $table = 'transaction';
   	protected $fillable = [
        'transaction_id','transaction_type_id','amount','total_amount','all_id','comment','created_by',
    ];
    protected $dates = ['deleted_at'];
}
