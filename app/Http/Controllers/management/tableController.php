<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\SectionTable;
use App\Models\Sorttable;
use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return 'kkkk';
        $tables=Sorttable::all();
        $section=SectionTable::all();
        $branch=Branch::all();
        return view('admin.table.index')->with('tables',$tables)->with('section',$section)->with('branch',$branch);
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
        $section=SectionTable::all();
        return view('admin.table.create')->with('section',$section)->with('branch',$branch);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        $newTable=new Table;
       // $newTable->price=$request->price;
        $newTable->image='table1.png';
       // $newTable->capacity=$request->capacity;
        $newTable->save();
        $table=new Sorttable();
        $table->id_table=$newTable->id;
        $table->id_section=$request->section;
        $table->id_branch=$request->branch;
        $table->save();
        //return $table;
        $request->session()->flash('status',$newTable->name . ' Table Added!');
        return  redirect('/tables');
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
        $branch=Branch::all();
        $section=SectionTable::all();
        $tables=Sorttable::find($id);
        return view('admin.table.edit')->with('tables',$tables)->with('section',$section)->with('branch',$branch);
      
      
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

       $table=Sorttable::find($id);
        //$table->id_table=$newTable->id;
        //$table->image='table1.png';
        $table->id_section=$request->section;
        $table->id_branch=$request->branch;
      //  $table->capacity=$request->capacity;
        $table->save();
        //return SectionTable::all();
        $request->session()->flash('status',$table->name . ' Table Updated!');
        return  redirect('/tables');


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
        $table=Table::find($id);
        $table->delete();
        session()->flash('status',' table Deleted!');
        return redirect('/tables');
        //
    }
}
