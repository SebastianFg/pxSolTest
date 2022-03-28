<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserFiles extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'file_name', 'url','created_at'
    ];

}
