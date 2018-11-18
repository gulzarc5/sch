<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cls extends Model
{
    use SoftDeletes;
    protected $table = 'cls';
   	protected $fillable = [
        'class_id','class_name','medium_id','created_by',
    ];
    protected $dates = ['deleted_at'];
}
