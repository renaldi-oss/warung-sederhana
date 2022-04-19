<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //mengembalikan semua data yang ada di table menu
        //return Menu::all();

        //mengembalikan data tertentu di table "where(namakolom,value yang ingin dicari disini yang ingin dicari adalah id user yang telah masuk)"
        //return Menu::where('user_id',auth()->user()->id)->get();
        return view('dashboard.tmenu.index',[
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tmenu.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->file('image')->store('gambar-menu');
        //ddd($request);
        //return $request;
        $validate = $request->validate([
            'name' => 'required|max:255|unique:menus',
            'price' => 'required|max:255',
            'category_id' => 'required|max:255', 
            'image'=> 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validate['image']= $request->file('image')->store('gambar');
        }
        $validate['user_id'] = auth()->user()->id;

        Menu::create($validate);

        return redirect('/dashboard/menus')->with('success','Menu baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
        return view('dashboard.tmenu.edit',[
            'menu' => $menu,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules = [
            'price' => 'required|max:255',
            'category_id' => 'required|max:255' 
        ];
        
        
        //kondisi dilakukan agar jika update tanpa mengubah nama makanan dapat dilakukan
        if($request->name != $menu->name){
            $rules['name'] = 'required|max:255|unique:menus';
        }
        
        $validate = $request->validate($rules);
        $validate['user_id'] = auth()->user()->id;

        Menu::where('id',$menu->id)
            ->update($validate);
        
        return redirect('/dashboard/menus')->with('success','Menu telah terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //Menu::destroy($menu->id);
        $menu->delete();
        return redirect('/dashboard/menus')->with('success','Menu telah dihapus');
    }
}
