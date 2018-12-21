<?php

namespace App\Http\Controllers;

use App\Model\Mydata;
use Illuminate\Http\Request;
use Nexmo\Response;

class MydataController extends Controller
{

    public function index()
    {

        return Mydata::all();


    }




    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        return Mydata::create($request->all());

    }


    public function edit(Mydata $mydata)
    {
        //
    }

    public function show($id)
    {
        return Mydata::find($id);
    }


    public function update(Request $request, $id)
    {
        $mydata = Mydata::findOrFail($id);
        if($mydata) {
            try{
                $mydata->id = $request->id;
                $mydata->D1 = $request->D1;
                $mydata->D2 = $request->D2;
        $mydata->D3 = $request->D3;
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
        $mydata = Mydata::findOrFail($id);
        $mydata->delete();

        return 204;
    }
}
