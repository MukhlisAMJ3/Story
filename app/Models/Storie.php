<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{

    protected $fillable = [
        'user_id',
        'title', 
        'synopsis', 
        'genre',
        'cover_image', 
        'status',
    ];

}
