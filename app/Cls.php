<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cls extends Model
{
    use SoftDeletes;
    protected $table = 'cls';
   	protected $fillable = [
        'class_id','class_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
