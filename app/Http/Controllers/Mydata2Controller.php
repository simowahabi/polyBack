<?php

namespace App\Http\Controllers;

use App\Model\Mydata2;
use Illuminate\Http\Request;

class Mydata2Controller extends Controller
{

    public function index()
    {

        return Mydata2::all();


    }




    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        return Mydata2::create($request->all());

    }


    public function edit(Mydata $mydata)
    {
        //
    }

    public function show($id)
    {
        return Mydata2::find($id);
    }


    public function update(Request $request, $id)
    {
        $mydata = Mydata2::findOrFail($id);
        if($mydata) {
            try{
                $mydata->id = $request->id;
                $mydata->D4 = $request->D4;
                $mydata->D5 = $request->D5;
                $mydata->D6 = $request->D6;
                $mydata->posx = $request-> posx;
                $mydata->posy = $request->posy;
                $mydata->mdate = $request->mdate;
                $mydata->save();
                return "200";

            }catch (\Exception $e){
                return "400";
            };


        }
        return "404";
    }


    public function destroy($id)
    {
        $mydata = Mydata2::findOrFail($id);
        $mydata->delete();

        return 204;
    }

    public function search(Request $request){
        return $request;
    }
}
