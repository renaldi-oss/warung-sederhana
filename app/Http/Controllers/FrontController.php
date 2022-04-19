<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Jumbotron;
use App\Models\User;
use App\Models\About;


class FrontController extends Controller
{
    public function index(){
        return view('frontend.index',[
            'menus' => Menu::latest()->get(),
            'about' => About::first(),
            'jumbo' => Jumbotron::first(),
            'faqs' => Faq::all(),
            'hitungs'=> Menu::distinct('category_id')->count() 
        ]);  
    }
}
