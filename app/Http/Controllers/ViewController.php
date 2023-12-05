<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brend;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $brands=Brend::all();
        return view('index',compact('brands'));

    }
    public function about(){
        return view('about');
    }
    public function brand(){
        $brands=Brend::all();
        return view('brand',compact('brands'));
    }
    public function contact(){
        return view('contact');
    }
    public function special(){
        return view('special');
    }
    public function show()
    {
dd($id);
        $brands=Brend::find($id);
//        dd($brands);
        return view('show',compact('brands'));
    }
}
