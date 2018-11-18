<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;
    protected $table = 'schedule';
   	protected $fillable = [
        'schedule_id','medium_id','class_id','examination_id','subject_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
