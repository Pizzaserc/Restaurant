<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservationtable extends Model
{
    protected $fillable=['id','time','table_id','section_id'];
    protected $hidden=['created_at','updated_at'];
    //

}
