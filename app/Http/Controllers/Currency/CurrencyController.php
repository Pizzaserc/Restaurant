<?php

namespace App\Http\Controllers\Currency;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use AshAllenDesign\LaravelExchangeRates\ExchangeRate;
use App\Models\Order;
use Guzzle\Http\Exception\ClientErrorResponseException;

use carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class CurrencyController extends Controller
{
//public  $x;
    
    

    public function index($id ) {
    $order= Order::findorFail($id);
   $price=$order->toatal_price;
   session(['price1' => $price]);

  // $this->x=$price;
        return view('admin.Currency.Currency')->with('price',$price);

    }

    public function exchangeCurrency(Request $request) { 
        

        $amount = ($request->amount)?($request->amount):(1);

	  $apikey = 'd1ded944220ca6b0c442';

	  $from_Currency = urlencode($request->from_currency);
	  $to_Currency = urlencode($request->to_currency);
      session(['from' =>  $from_Currency]);
      session(['to' =>  $to_Currency]);

	  $query =  "{$from_Currency}_{$to_Currency}";

	  // change to the free URL if you're using the free version
	  $json = file_get_contents("http://free.currencyconverterapi.com/api/v5/convert?q={$query}&compact=y&apiKey={$apikey}");

	  $obj = json_decode($json, true);
	  
	  $val = $obj["$query"];

	  $total = $val['val'] * $amount;
      
	  $formatValue = number_format($total, 2, '.', '');
      session(['price2' =>  $formatValue ]);
      $data = "$formatValue";

      
     // echo $data; die;
      if(!$request->data)
        return view('admin.Currency.exchangeCurrency')->with('data',$data)->with('to_Currency',$to_Currency);
        else{
            //return $formatValue;
            $user=Auth::user();
        //$u=User::where('name',$user->name);
         $order=Order::where('user_id',$user->id)->where('order_status','unpaid')->get()->first();
         if($order)
         {

            $order->total_received=$formatValue;
            $user->point+=$formatValue/100;
            $order->payment_type='cashier';
            $order->order_status='paid';
            $order->save();
            $user->save();
         }
        return redirect('/');
  
        }
    }

    public function pay(Request $request){
                
      $notfication=new Notification;
      $notfication->text="new user pay order cashier";
      $notfication->save();
        $value = Session('to');
        $request["from_currency"]= $value;
        $request["to_currency"]= 'USD';
       // return $request;
        return $this->exchangeCurrency($request);
        
        //return $value;
       // $user = Auth::user();
       // $price=Order::where('user_id',$user->id)->where('order_status',	'unpaid')->get()->first()->toatal_price;


        //dd( $request);
        //return view('admin.Currency.pay');
    }

}
