<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mislleneous_fee extends Model
{
    use SoftDeletes;
    protected $table = 'mislleneous_fee';
   	protected $fillable = [
        'mislleneous_fee_id','std_id','transaction_id','fee_type_id','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
