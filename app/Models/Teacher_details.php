<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher_details extends Model
{
    use SoftDeletes;
    protected $table = 'teacher_details';
   	protected $fillable = [
        'teacher_details_id','teacher_id','qualification_id','experience','specialization','created_by',
    ];
    protected $dates = ['deleted_at'];
}
