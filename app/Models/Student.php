<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'student';
   	protected $fillable = [
        'std_id','std_name','class_id','medium_id','parent_id','address_id','pre_edu_id','std_details_id','is_new','created_by',
    ];
    protected $dates = ['deleted_at'];
}
