<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marksheet extends Model
{
    use SoftDeletes;
    protected $table = 'marksheet';
   	protected $fillable = [
        'marksheet_id','student_id','examination_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
