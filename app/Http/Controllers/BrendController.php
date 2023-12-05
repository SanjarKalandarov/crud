<?php

namespace App\Http\Controllers;

use App\Models\Brend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands=Brend::all();
        return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        $brands= new Brend();
        $brands->name= $request->name;
        $brands->price= $request->price;
        $brands->operativ= $request->operativ;
        $brands->opshiy= $request->opshiy;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images//'), $filename);
            $brands['image'] = $filename;
        }
        $brands->save();
return redirect(route('brand.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brands=Brend::find($id);
        return view('show',compact('brands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brend $brend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brend $brend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brend $brend)
    {
        //
    }
}
