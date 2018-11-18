<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parent_details extends Model
{
    use SoftDeletes;
    protected $table = 'parent_details';
   	protected $fillable = [
        'parent_id','parent_name','relation','mobile_no','email','d_o_b','education','income','occupation','created_by',
    ];
    protected $dates = ['deleted_at'];
}
