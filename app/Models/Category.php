<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['id','name'];
    protected $hidden=['created_at','updated_at'];
    //
    public function menu()
    {
        return $this->hasMany('App\Models\Menu','category_id','id');
    }


}
