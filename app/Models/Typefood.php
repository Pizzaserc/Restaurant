<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typefood extends Model
{
    protected $fillable = ['id', 'name', 'image'];
    protected $hidden = ['created_at', 'updated_at'];
    //
}
