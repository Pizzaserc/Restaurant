<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Order;
use App\Models\SectionTable;
use App\Models\Sorttable;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reservationController extends Controller
{



  public function __construct()
  {
  $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('site.reservation.home');
    }
    public function indexTable(Request $request)
    {
        //return $request;
        $categories=Category::all();
        $section=SectionTable::all();
        $branches=Branch::all();

        return view('site.reservation.table')->with('categories',$categories)->with('section',$section)
            ->with('branches',$branches);
    }
    public function getTable(Request $request)
    {
       // return 'kkkkkkk';
        // return  $request;
        $section=SectionTable::where('name',$request->section)->get()->first();
        $branch=Branch::where('place',$request->branch)->get()->first();
       // return $branch->id;
          $table=Sorttable::where('id_section',$section->id)->where('id_branch',$branch->id)->get();
        $tab_det = Table::all();
        $count= sizeof($table);
        $_count=0;
        $html = " ";
        $status='no';
        foreach ($table as $t) {
           $orders=Order::where('table_id',$t->id_table)->get();
           foreach ($orders as $order)
           {
             if($order->time==$request->time && $order->date==$request->date)
             {

               $status='yes';
             }
           }
           if($status=='yes')
           {
               $_count++;
              /* if(Auth::user()->id!=$order->user_id){
      $html .= "<button disabled class='btn btn-white btn-Selected-table' data-id=" . $t->id_table .  " data-date=" . $request->date . " data-time=" .$request->time . " >";

               }*/
            
    $html .= "<button  class='btn btn-white btn-Selected-table' data-id=" . $t->id_table .  " data-date=" . $request->date . " data-time=" .$request->time . " >";


$html .=" <img src='" . url('/admin/table/images/tam.jpg') . "'  height='250' width='250 'style='border-radius: 15%; '>";

               $html .= "<br><h4><span class='badge badge-danger' style=' align-content:center;padding-left: 10px;'>".$t->id_table."</span></h4>";
           }

         else{
            $html .= "<button class='btn btn-white btn-Selected-table' data-id=" . $t->id_table .  " data-date=" . $request->date . " data-time=" .$request->time . ">

            <img src='" . url('/admin/table/images/tam.jpg') . " ' height='250' width='250 'style='border-radius: 15%; '>";

             $html .= "<br><h4><span class='badge   badge-success' style=' align-content:center;padding: 15px;font-size:25px'>".$t->id_table."</span></h4>";

              }





            $html .= "</button></div>";
            $status='no';
        }

                   /*  if(($_count==$count && Auth::user()->id )&& $_count==0) {
                         $user=Auth::user();
                         return "<h1 style='align-content: center'>Sorry</h1> <a href='tables' class=' btn btn-warning listview' data-iduser='$user->id' data-nameuser='$user->name' data-date='$request->date ' data-time='$request->time '>listwatting</a>";
                     }*/

              return $html;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getMenu($category_id){

        $menus=Menu::where('category_id',$category_id)->get();
        $html=" ";
        foreach ($menus as $menu){


            $html .= "<div class='col-4 btn-Selected-menu'  data-id=".$menu->id." data-name=".$menu->name." >";
            $html .= "<a href='javascript:void(0)' >
            <img class='btn-selected-menu' src='../admin/menu/images/".$menu->image."' data-id='".$menu->id."' height=250   width=250 alt='rg'>
            <div class='text-center'>
            ".$menu->name."</div>
            <div class='text-center'>
            ".number_format($menu->price)." USD</div></a>";
            $html .= "</div>";

        }
        return $html;

    }



}
