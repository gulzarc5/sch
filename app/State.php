<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    protected $table = 'state';
   	protected $fillable = [
        'state_id', 'state_name',];
    protected $dates = ['deleted_at'];
}
