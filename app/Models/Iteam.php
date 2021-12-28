<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iteam extends Model
{
    protected $fillable = ['id', 'name', 'image','quantity','HighQuantity','MinimumQuantity'];
    protected $hidden = ['created_at', 'updated_at'];
    //
}
