<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deduction_salary extends Model
{
    use SoftDeletes;
    protected $table = 'deduction_salary';
   	protected $fillable = [
        'deduction_salary_id','amount','created_by',
    ];
    protected $dates = ['deleted_at'];
}
