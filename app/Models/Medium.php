<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medium extends Model
{
    use SoftDeletes;
    protected $table = 'medium';
   	protected $fillable = [
        'medium_id','medium_name','created_by',
    ];
    protected $dates = ['deleted_at'];
}
