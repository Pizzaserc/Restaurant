<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detailsorder extends Model
{
    protected $fillable = ['id', 'sale_id','menu_name',
        'menu_id','menu_price','quantity','status'];
    protected $hidden = ['created_at', 'updated_at'];

}
