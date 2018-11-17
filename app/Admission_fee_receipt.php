<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission_fee_receipt extends Model
{
    use SoftDeletes;
    protected $table = 'admission_fee_receipt';
   	protected $fillable = [
        'admission_fee_receipt_id','transaction_id','fee_type_id','std_id','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
