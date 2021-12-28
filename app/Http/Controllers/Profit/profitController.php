<?php

namespace App\Http\Controllers\Profit;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Profit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profitController extends Controller
{
    public function index(){
        $profit=Profit::all();
        $menu=Menu::all();
     //  return   $menu[10]->name;
        return view('admin.profit.index')->with('profit',$profit)->with('menu',$menu);
        
    }
    //
}
