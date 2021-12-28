<?php

namespace App\Http\Controllers\management;
use App\Models\Detailsmenu;
use App\Models\Element;
use App\Models\Employee;
use App\Models\Iteam;
use App\Models\Menu;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Profit;
use App\Models\Typefood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class menuController extends Controller
{


    public function createdMenu(){
        $menu=Menu::all();
        $element=Element::all();
        $iteam=Iteam::all();
        return view('admin.menu.createlement')->with('menu',$menu)->with('element',$element)->with('iteam',$iteam);
        
    
    
    }

    public function chefMenu(){
        $menu=DetailsMenu::all();
        $employee=Employee::all();
        return view('admin.menu.chef')->with('menu',$menu)->with('employee',$employee);
        
    
    }
    public function index()
    {

        $menus=Menu::all();
        $categories = Category::all();
       return view('admin.menu.index')->with('menus',$menus)->with('categories',$categories);
        //
        
   
    }



    public function creatElement($id_menu,$name){
       // return $id_menu;
        // return'rrrrrrrrrr';
        $types= Typefood::all();
        $iteams=Iteam::all();
        return view('admin.element.create')->with('types',$types)->with('iteams',$iteams)->with('id_menu',$id_menu)->with('name',$name);
    
    
    }
    public function storeElement(Request $request){
        $values=[];
        $index=0;
        foreach ($request->name as $name)
        {
            if ($name!=null)
            {
                $values[$index++]=$name;
            }
        }
        //return $values;
        //return $request;
//return $request-
        $prfit=0.0;

        for ($i=0;$i<sizeof($request->items);$i++)
        {

            $element=new Element();
             $element->id_menu=$request->id_menu;
            $element->id_iteams=$request->items[$i];
            $element->quanity=$values[$i];
           $prfit+=$values[$i]*Iteam::find($element->id_iteams)->pricekillo/1000;
           // $prfit+=$values[$i];
            $element->save();

        }
        $pro=new Profit();
        $pro->id_menu=$request->id_menu;
        $pro->cost=$prfit;
        $pro->price=Menu::find($request->id_menu)->price;
        $pro->profit=  $pro->price- $pro->cost;
        $pro->save();
       //return $prfit;
        $menus=Menu::all();
        $categories = Category::all();
        $request->session()->flash('status', ' Menu Added!');
        return redirect('/menu');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $chefs=Employee::all()->where('type','chef');
        $categories = Category::all();
        return view('admin.menu.create')->with('categories',$categories)->with('chefs',$chefs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $chef= $request->chef;
        $request->validate([

            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'chef'=>'required'
        ]);

        $imageName = 'noimgfound.jpg';

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
            ]);


            $imageName = date('mdYHis').uniqid(). '.' .$request->image->extension();

           // $request->image->move(public_path('assets/admin/menu/images'),$imageName);
            $request->image->move('admin/menu/images',$imageName);
        }

    $ChefMenu=Employee::where('type','chef');

    $mod_menu = new Menu;
    $mod_menu->name = $request->name;
    $mod_menu->price = $request->price;
    $mod_menu->description = $request->description;
    $mod_menu->image = $imageName;
    $mod_menu->category_id = $request->category_id;
  //return  $mod_menu->id_chef = $request->chef;
 
    $mod_menu->save();
    //return $mod_menu->id;
        for($i=0;$i<sizeof($chef);$i++) {
    $menudetails = new Detailsmenu();
    $menudetails->id_menu = $mod_menu->id;
    $menudetails->id_chef =  $request->chef[$i];
    $menudetails->id_branch=Employee::find($menudetails->id_chef )->id_branch;  

         $menudetails->save();
                                       }
        $request->session()->flash('status',$mod_menu->name.' Menu Added!');

        $c=$request->name;
        return $this->creatElement( $mod_menu->id, $mod_menu->name);
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
        $categories=Category::all();
        $menus=Menu::find($id);
        return view('admin.menu.edit')->with('menus',$menus)->with('categories',$categories);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    //*/
    public function update(Request $request, $id)
    {
        $request->validate([
           'name'=>'required',
        ]);
        $imageName = 'noimgfound.jpg';
         if($request->image)
         {
             $imageName = date('mdYHis').uniqid(). '.' .$request->image->extension();
             $request->image->move('assets/admin/menu/images',$imageName);
         }

        $menu__=Menu::find($id);
        $menu__->name=$request->name;
        $menu__->name = $request->name;
        $menu__->price = $request->price;
        $menu__->description = $request->description;
        $menu__->image = $imageName;
        $menu__->category_id= $request->category_id;
        $menu__->save();


        $request->session()->flash('status', $request->name .' Menu Updated!');
        return redirect('/menu');
        //
        return "ddddddddddddd";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $menu=Menu::find($id);
        $menu->delete();
        session()->flash('status',' menu Deleted!');
        return redirect('/menu');

        //
    }
}
