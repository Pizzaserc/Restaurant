<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use App\Models\Iteam;

use App\Models\Typefood;
use Illuminate\Http\Request;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks=Iteam::all();
        $types=Typefood::all();
        return view('admin.stock.index')->with('stocks',$stocks)->with('types',$types);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stock.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $request->validate([

            'name' => 'required',
            'quantity' => 'required',
            'HighQuantity' => 'required',
            'MinimumQuantity' => 'required',
                 'price'=> 'required',
                 'image'=> 'required',
                 'typefood'=> 'required',

        ]);

    



        $stock = new Iteam;
        $stock->name = $request->name;
        $stock->quantity = $request->quantity;
        $stock->HighQuantity = $request->HighQuantity;
        $stock->image =$request->image;
        $stock->pricekillo =$request->price; 
        $stock->id_typefood =$request->typefood;
        $stock->MinimumQuantity= $request->MinimumQuantity; 
        $stock->save();


        $request->session()->flash('status',$stock->name.' Iteam Added!');


        return redirect('/stock');

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
    public function edi(Request $request)
    {

        return ';;';
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

        $item=Iteam::find($id);
        $item->delete();
        return redirect('/stock');

    }
}
