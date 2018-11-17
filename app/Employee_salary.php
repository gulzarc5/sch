<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee_salary extends Model
{
    use SoftDeletes;
    protected $table = 'employee_salary';
   	protected $fillable = [
        'employee_salary_id','employee_id','transaction_id','deduction_id','is_paid','created_by',
    ];
    protected $dates = ['deleted_at'];
}
