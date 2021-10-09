<?php

namespace App\Http\Controllers;

use App\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.catagory');
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
        $catagory= new Catagory();
        $catagory->catagory_name=$request->catagory_name;
        $catagory->catagory_description=$request->catagory_description;
        $catagory->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        $catagory=Catagory::get();
        //dd($catagory->all());
        return view('admin.layouts.catagoryTable',compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catagory=Catagory::findOrFail($id);
        return view('admin.layouts.editCatagory',compact('catagory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catagory=Catagory::findOrFail($id);
        $catagory->catagory_name=$request->catagory_name;
        $catagory->catagory_description=$request->catagory_description;
        $catagory->save();
        return redirect()->route('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catagory=Catagory::findOrFail($id);
        // dd($catagory);
        $catagory->delete();
        return redirect()->back();

    }
}
