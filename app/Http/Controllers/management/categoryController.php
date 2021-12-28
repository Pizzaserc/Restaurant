<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class categoryController extends Controller
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

      
     $categories=Category::all();
     return view('admin.category.index')->with('categories',$categories);
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('admin.category.create');
                
    
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
     Category::create([

         'name'=>$request->name,
     ]);

      $request->session()->flash('status', $request->name.' Category Added!');

        return redirect('/category');//
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
        $category=Category::find($id);
        return view('admin.category.edit')->with('category',$category);
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

        $mod_cat =Category::find($id);
        $mod_cat->name = $request->name;
        $mod_cat->save();

        $request->session()->flash('status', $request->name.' Category Updated!');

        return redirect('/category');


    
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
        $category=Category::find($id);
        $menu=Menu::where('category_id',$id);
        $menu->delete();
        $category->delete();

        session()->flash('status',' Category Deleted!');

        return redirect('/category');
        //
    }
}
