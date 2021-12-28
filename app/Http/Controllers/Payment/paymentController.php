<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paymentController extends Controller
{

    
    
    public function payment(){
        $user=Auth::user();
        $price=Order::where('user_id',$user->id)->where('order_status',	'unpaid')->get()->first()->toatal_price;
        return view('welcome1')->with('price',$price);
    }

    public function savepayment(Request $request){

        $notfication=new Notification();
        $notfication->text="new user pay order bank";
        $notfication->save();    
        
        $user=Auth::user();
        //$u=User::where('name',$user->name);
         $order=Order::where('user_id',$user->id)->where('order_status',	'unpaid')->get()->first();
        $order->total_received=$order->toatal_price;
        $user->point+=$order->toatal_price/100;
        $order->payment_type='card';
        $order->order_status='paid';
        $order->save();
        $user->save();
       // return $request;
        return redirect('/');
    }
    //
}
