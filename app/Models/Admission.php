<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    use SoftDeletes;
    protected $table = 'admission';
   	protected $fillable = [
        'admission_id','transaction_id', 'std_id','admission_type','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
