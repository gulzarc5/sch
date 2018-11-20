<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee_catagory extends Model
{
    use SoftDeletes;
    protected $table = 'fee_catagory';
   	protected $fillable = [
        'fee_catagory_id','fee_catagory_name',
    ];
    protected $dates = ['deleted_at'];
}
