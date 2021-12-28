<?php

namespace App\Http\Controllers\feedback;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\Detailsmenu;
use App\Models\Employee;
use App\Models\Menu;
use App\Models\User;
use Carbon\Carbon;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class feedbackController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }

public function branch(){

    
    return view('feedback.branch');
}


public function index($id){
    $menus=Menu::all();
    
       $details=Detailsmenu::where('id_branch',$id)->get();
    return view('feedback.index')->with('menus',$menus)->with('details',$details);
}


public function employee(){

    $categories=Employee::all(); //   $details=Detailsmenu::where('id_branch',$id)->get();
    return view('feedback.f')->with('categories',$categories);
}


public function multi(){
    $categories=User::all(); //   $details=Detailsmenu::where('id_branch',$id)->get();
    return view('feedback.multi')->with('categories',$categories);
}



public function store(Request $request){
    //return $request;
    $dateNow=Carbon::now()->toDateString();
    $assessment =new Assessment();
    $assessment_find=Assessment::all()->where('id_menu',$request->id_menu)->where('date',$dateNow)->first();
    $details=Detailsmenu::where('id_menu',$request->id_menu)->where('id_chef',$request->chef)->get()->first();
 
  if(!$assessment_find){
  $chef=Employee::find($request->chef);
  $chef->bouns+=1;
  $chef->save();
   $details->accountAssessments+=1;
   $details->sumAssessments+=$request->assessment;
   $details->save();
  $user = Auth::user();
  $assessment->id_user =10;
  $assessment->id_menu=$request->id_menu;
  $assessment->assessment=$request->assessment;
  $assessment->date=$dateNow;
  $assessment->save();
  
    }
   return view('feedback.branch');
}

    //
}
