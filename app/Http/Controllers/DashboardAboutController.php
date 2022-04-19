<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return About::first();
        return view('dashboard.about.index',[
            'about' => About::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validate =$request->validate([
            'body' => 'required',
            'body2'=> 'required',
            'image'=> 'file|image|max1024'
        ]);

        if($request->file('image')){
            $validate['image']= $request->file('image')->store('gambar');
        }
        $validate['user_id'] = auth()->user()->id;
        $validate['body'] = Str::limit(strip_tags($request->body), 100, '...');
        $validate['body2'] = Str::limit(strip_tags($request->body), 100, '...');
        
        About::create($validate);

        return redirect('/dashboard/menus')->with('success','about telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
        return view('dashboard.about.index',[
            'about' => About::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
         
        $validate =$request->validate([
            'body' => 'required',
            'body2'=> 'required',
            'image'=> 'file|image|max:1024'
        ]);

        if($request->file('image')){
            $validate['image']= $request->file('image')->store('gambar');
        }
        $validate['user_id'] = auth()->user()->id;
        // $validate['body'] = (strip_tags($request->body), 100, '...');
        // $validate['body2'] = Str::limit(strip_tags($request->body2), 100, '...');

        About::where('id',$about->id)->update($validate);

        return redirect('/dashboard/about')->with('success','About telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
