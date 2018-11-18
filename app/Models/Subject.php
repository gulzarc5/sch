<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use SoftDeletes;
    protected $table = 'document';
   	protected $fillable = [
        'subject_id','class_id','subject_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
