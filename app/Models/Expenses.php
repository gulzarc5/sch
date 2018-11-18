<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expenses extends Model
{
    use SoftDeletes;
    protected $table = 'expenses';
   	protected $fillable = [
        'expenses_id','transaction_id','exp_type','created_by',
    ];
    protected $dates = ['deleted_at'];
}
