<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Detailsorder;
use App\Models\Employee;
use App\Models\Order;
use App\Models\User ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function order()
            {
                $details=Detailsorder::all();
        $orders=Order::all();
       return view('admin.employee.order')->with(['orders'=>$orders,'details'=>$details]);

            }


            public function ordersubmit($id){
                $order=Order::find($id);
                $order->submit=1;
                $order->save();
             return   redirect()->back();


            }

    public function index()
    {

            $employees=Employee::all();
            return view('admin.employee.index')->with('employees',$employees);
        
    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch=Branch::all();
       return view('admin.employee.create')->with('branch',$branch);}
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request;
        $request->validate([

            'name' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'email'=>'required',
            'password'=>'required',
        ]);


        $imageName = 'noimgfound.jpg';

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);


            $imageName = date('mdYHis').uniqid(). '.' .$request->image->extension();

             $request->image->move(public_path('employee/image'),$imageName);
        }



        $mod_employee  = new Employee;
        $mod_employee->id_branch = $request->branch;
        $mod_employee->email = $request->email;
        $mod_employee->bouns = 0;
        $mod_employee->name = $request->name;
        $mod_employee->salary = $request->salary;
        $mod_employee->startDate =Carbon::now()->toDateTimeString();
        $mod_employee->image = $imageName;
        $mod_employee->type= $request->type;
        $mod_employee->save();
         
      
           $user =new User();
          $user->email=$mod_employee->email;
          $user->name=$mod_employee->name;
          $user->password=Hash::make($request->password);
          $user->save();
       
          $request->session()->flash('status', $mod_employee->name.' Employee Added!');
         return redirect('/employees');
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
$employee=Employee::find($id);
return view('admin.employee.edit')->with('employee',$employee);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'salary' => 'required',
            'type' => 'required'
        ]);
        $imageName = 'noimgfound.jpg';
        if($request->image)
        {
            $imageName = date('mdYHis').uniqid(). '.' .$request->image->extension();
            $request->image->move(public_path('admin/employee'),$imageName);
        }


        $employee=Employee::find($id);
        $employee->name=$request->name;
        $employee->salary = $request->salary;
        $employee->type = $request->type;
        $employee->startDate = $request->startDate;
        $employee->image = $imageName;

        $employee->save();

        
        $request->session()->flash('status', $request->name .' Employee Details Updated!');
        return redirect('/employees');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employee::find($id);
        $employee->delete();
        session()->flash('status',' employee Deleted!');
        return redirect('/employees');
        //
    }
}
