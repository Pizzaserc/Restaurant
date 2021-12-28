<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['id', 'name', 'image','salary','startDate','bonus'];
    protected $hidden = ['created_at', 'updated_at'];



    //

}
