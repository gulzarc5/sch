<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
    protected $table = 'address';
   	protected $fillable = [
        'address_id','state_id','city_id','village_name','po','pin','ps','created_by',
    ];
    protected $dates = ['deleted_at'];
}
