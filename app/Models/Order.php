<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'table_id','table_name',
        'user_id','user_name','toatal_price','total_received','total_received','change','payment_type','order_status'];
    protected $hidden = ['created_at', 'updated_at'];






}
