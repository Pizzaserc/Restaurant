<?php

namespace App\Http\Controllers\report;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;


class reportController extends Controller
{
    public function index(){

        return view('report.index');
    }

    public function show(Request $req){

        $req->validate([
            'dateStart' => 'required',
            'dateEnd' => 'required'
        ]);

        $dateStart = date("Y-m-d H:i:s", strtotime($req->dateStart.' 00:00:00'));
        $dateEnd = date("Y-m-d H:i:s", strtotime($req->dateEnd.' 23:59:59'));


        $sales = Order::whereBetween('updated_at',[$dateStart, $dateEnd])->where('order_status','paid');

        return view('report.showReport')->with('dateStart',date("m/d/y H:i:s", strtotime($req->dateStart.' 00:00:00')))->with('dateEnd',date("m/d/y H:i:s", strtotime($req->dateEnd.' 23:59:59')))->with('toatalPrice', $sales->sum('toatal_price'))->with('sales',$sales->paginate(5));
    }


    public function export(){


    }



}

