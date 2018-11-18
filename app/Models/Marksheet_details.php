<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marksheet_details extends Model
{
    use SoftDeletes;
    protected $table = 'marksheet_details';
   	protected $fillable = [
        'marksheet_details_id','marksheet_id','subject_id','marks','pass_marks','total_marks','percentage','grade','created_by',
    ];
    protected $dates = ['deleted_at'];
}
