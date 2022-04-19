<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use Illuminate\Http\Request;

class DashboardJumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.jumbotron.index',[
            'jumbo'=> Jumbotron::first()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function show(Jumbotron $jumbotron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumbotron $jumbotron)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jumbotron $jumbotron)
    {
        $validate =$request->validate([
            'title' => 'required',
            'slogan1'=> 'required',
            'slogan2'=> 'required',
            'image'=> 'file|image|max:1024'
        ]);

        if($request->file('image')){
            $validate['image']= $request->file('image')->store('gambar');
        }

        Jumbotron::where('id',$jumbotron->id)->update($validate);

        return redirect('/dashboard/jumbotron')->with('success','Jumbotron telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumbotron $jumbotron)
    {
        //
        
    }
}
