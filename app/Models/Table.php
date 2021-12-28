<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['id', 'image','price','capacity','section_id'];
    protected $hidden = ['created_at', 'updated_at'];


    //

 public function getSection()
 {
     return $this->belongsTo('App\Models\SectionTable','section_id');
 }

}
