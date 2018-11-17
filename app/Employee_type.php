<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee_type extends Model
{
    use SoftDeletes;
    protected $table = 'employee_type';
   	protected $fillable = [
        'employee_type_id','type_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
