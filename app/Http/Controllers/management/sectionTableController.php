<?php

namespace App\Http\Controllers\Admin\management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SectionTable;
use Illuminate\Http\Request;

class sectionTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $sections=SectionTable::all();
     return view('admin.table.section.index')->with('sections',$sections);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.table.section.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SectionTable::create([

         'name'=>$request->name,
     ]);

      $request->session()->flash('status', $request->name.' section Added!');

        return redirect('/section');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $category=Category::with('menu')->find($id);
      $menu=$category->menu;
      return view('admin.menu.index')->with('menus',$menu);
      //return 'hhhhhhh';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section=SectionTable::find($id);
        return view('admin.table.section.edit')->with('section',$section);

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
        ]);

        $section =SectionTable::find($id);
        $section->name = $request->name;
        $section->save();

        $request->session()->flash('status', $request->name.' Section Updated!');

        return redirect('/section');
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
        $section=SectionTable::find($id);
        $section->delete();
        session()->flash('status',' Section Deleted!');

        return redirect('/section');
        //
    }
}
