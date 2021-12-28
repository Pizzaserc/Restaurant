<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Assessment;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Detailsmenu;
use App\Models\Detailsorder;
use App\Models\Employee;
use App\Models\Listwating;
use App\Models\Menu;
use App\Models\Order;
use App\Models\SectionTable;
use App\Models\Table;
use App\Notifications\NotifyPostOwner;
use \Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function assessment(Request $request)
    {
      // return  $request->branch;
        $dateNow=Carbon::now()->toDateString();
        $assessment =new Assessment();
        $assessment_find=Assessment::all()->where('id_menu',$request->id_menu)->where('date',$dateNow)->first();
        $details=Detailsmenu::where('id_menu',$request->id_menu)->get()->first();
       // $size= Assessment::where('id_menu',$request->id_menu)->get();
       // $details->accountAssessments=sizeof($size);
       // $details->save();
        //$details->accountAssessments;
       // return Assessment::where('id_menu',1)->sum('assessment');
      if(!$assessment_find){

       $details->accountAssessments+=1;
       $details->sumAssessments+=$request->assessment;
       $details->save();
      $user = Auth::user();
      $assessment->id_user =10;
      //  $assessment->id_user =$user->id_user;
      $assessment->id_menu=$request->id_menu;
     $assessment->assessment=$request->assessment;
     $assessment->date=$dateNow;
     $assessment->save();

}
        $menu=Menu::findOrFail($request->id_menu);
        return $this->getMenu($menu->category_id);

    }


    public function indexCategory()
    {
        $categories=Category::all();
        $menus=Menu::all();
        return view('site.category.index')->with('categories',$categories)->with('menus',$menus);
        

    }


    public function chef(Request $request)
    {
        return $request;
        $detailsMenu=Detailsmenu::where('id_menu',$request->menu)->get()->first();
        $assessments=$detailsMenu->sumAssessments/($detailsMenu->accountAssessments*100);
        $employee=Employee::find( $detailsMenu->chef);
        return view('site.category.employee')->with('employee',$employee)->with('assessments',$assessments);

    }


    public function detailsTable($table){
        
        $html="";
        if(Auth::user()->is_admin)
        $order=Order::where('table_id',$table)->where('order_status','unpaid')->get();

        if(!Auth::user()->is_admin)
        $order=Order::where('table_id',$table)->where('order_status','unpaid')->get()->first();

        
        if(!$order)
        {
            //$html.="no data foud";
        }
        
        else{
            for($i=0;$i<$order->count();$i++){
                if( Auth::user()->id==$order[$i]->user_id ||Auth::user()->is_admin==1)
                //return Auth::user();
                $html.=$this->details($order[$i]->id);
            }
            
            
        }
        return $html;
      }



    public function getMenu($category_id){

        $menus=Menu::where('category_id',$category_id)->get();
        $branches=Branch::all();
        $employee=Employee::all()->where('type','chef');

        // return $count=sizeof($menus);
        $html=" ";
        foreach ($menus as $menu){


          $detailsMenu=Detailsmenu::where('id_menu',$menu->id)->get()->first();
            $html .= "<div class='col-4' >";
            $html .= "<a href='javascript:void(0)' >
            <img class='menuCustomers' src='assets/admin/menu/images/".$menu->image."' data-id='".$menu->id."' style='border-radius:25%' height=150   width=150 >
            <input class='rang' type='range' min='10' max='100' step='10' value='20'>
            <select name='branch' class='form-control' id='branch' required data-error='Please select branche'>
                                                <option disabled selected></option>";

            foreach($branches as $s)
            {
                $html .= "<option value="."$s->place".">$s->place</option>";
             }

            $html .= "</select><span> <i class='degree fas fa-chevron-circle-right' data-id='$menu->id'></i></span>
            <div class='text-center'>
            ".$menu->name."</div>
            <div class='text-center'>
            ".number_format($menu->price)." USD</div></a>";

            $html.="<button  class='btn btn-danger chef'  data-menu='$menu->id'>chef</button>";



               $html .= "<p type='color:black'>$detailsMenu->accountAssessments" . "views</p>";



            $html .= "</div>";

        }
       // return $detailsMenu->accountAssessments;
        return $html;

    }





    public function confirmOrder(Request $req){
        $sale_id = $req->sale_id;
        Detailsorder::where('sale_id',$sale_id)->update(['status'=>'Confirmed']);
        $html =  $this->details($sale_id);
        return $html;
    }
  public function orderFood(Request $request)
  {
      //return $request;
  //return 'hello';
 //  return $request->menu_id;
      $menu_id =  $request->menu_id;
      $table_id  =  $request->table_id;
      $menu = Menu::find($menu_id);

      $sale = Order::where('table_id',$table_id)->where('order_status','unpaid')->where('time',$request->time)->where('date',$request->date)->first();
      if(!$sale){

          $user = Auth::user();
          $sale = new Order;
          
         // $user->notify(new NotifyPostOwner());
          $sale->table_id = $table_id;
          $sale->user_id =$user->id;
          $sale->user_name =$user->name;
          $sale->time=$request->time;
          $sale->date=$request->date;
          $sale->save();
          $sale_id = $sale->id;

          //$table = Table::find($table_id);
         //  $table->status = 'unavailable';
        //  $table->save();

      }else{

          $sale_id =  $sale->id;
           }
      $saleDetail = new Detailsorder;
      $saleDetail->sale_id =  $sale_id;
      $saleDetail->menu_id = $menu->id;
      $saleDetail->menu_name = $menu->name;
      $saleDetail->menu_price = $menu->price;
      $saleDetail->quantity = $request->quantity;
      $saleDetail->save();
      $sale->toatal_price += ($menu->price * $request->quantity);
      $sale->save();
      $html=$this->details($sale_id);
      return $html;


  }

  public function listview(Request $request){
        //return  $request;
      $listwiting=new Listwating;
      $listwiting->id_user=$request->iduser;
      $listwiting->nameuser=$request->nameuser;
      $listwiting->time=$request->time;
      $listwiting->date=$request->date;
      $listwiting->save();
      return reservationController::indexTable($listwiting);



  }

  public function details($sale_id){
      $html="";
      $orderDetails=Detailsorder::where('sale_id',$sale_id)->get();
      $html.="<table class='table table-responsive' style='background:#eeb462'>

        <thead>
            <tr>
                <td>id</td>
                <td>menu</td>
                <td>quantity</td>
                <td>price</td>
                <td>status</td>
                <td>total</td>
                <td>evaluation</td>
            </tr>
        </thead>
        </tbody>";
      foreach($orderDetails as $details){

          $html.= "<tr>
            <td>".$details->id."</td>
            <td>".$details->menu_name."</td>
            <td>".$details->quantity."</td>
            <td>".$details->menu_price."</td>
             <td>".$details->status."</td>
            <td>".$details->menu_price * $details->quantity ."</td>";

          $showPaymentButton =true;
          if($details->status == 'notConfirmed'){
              $showPaymentButton = false;
              $html.=  "<td><i class='fa fa-trash' aria-hidden='true'></i></td>";
          }else{
              $html.=  "<td><i class='fa fa-check' aria-hidden='true'></i></td>";
          }
          $html.= "</tr>";



      }

      $html.= "</tbody>
    </table>";
      $total=Order::find($sale_id);
      $html .= "<h3 style='font-size:30px;text-shadow:5px 5px 5px #FFBA08 ;padding:20px ;font-weight:bolder'>Total Amount: ".$total->toatal_price."</h3>";

      if($showPaymentButton == false)
      {

          $html .= "<button class='btn btn-danger btn-block btnConfirmOrder' data-id=".$sale_id.">Confirm Order</button>";
      }
  else{

    $html .= "<button class='btn btn-warning btn-block  btnpayment'   data-target='#myModal'  data-toggle='modal' data-id=".$sale_id.">payment Order</button>";
     }
      return $html;
  }

}
