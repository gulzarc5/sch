<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student_details extends Model
{
    use SoftDeletes;
    protected $table = 'student_details';
   	protected $fillable = [
        'std_id','d_o_b','gender','catagory','blood_group','birth_place','nationality','religion','mobile_no','email','img_path','created_by',
    ];
    protected $dates = ['deleted_at'];
}
