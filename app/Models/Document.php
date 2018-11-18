<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;
    protected $table = 'document';
   	protected $fillable = [
        'std_id','document_name','document_path','created_by',
    ];
    protected $dates = ['deleted_at'];
}
