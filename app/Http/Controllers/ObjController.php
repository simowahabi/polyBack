<?php

namespace App\Http\Controllers;

use App\Obj;
use Illuminate\Http\Request;

class ObjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Obj::all();

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
        try{
            $mydata=new Obj();
            $mydata->posx = $request-> posx;
            $mydata->posy = $request->posy;
            $mydata->mdate = $request->mdate;
            $mydata->obj = $request->obj;
            $mydata->save();
            return 200;
        }catch (\Exception $e){
            return 400;

    }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function show(Obj $obj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function edit(Obj $obj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obj $obj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obj $obj)
    {
        //
    }
}
