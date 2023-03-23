<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    //User table one to many relationship with role table
    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
    
}
