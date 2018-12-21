<?php

use App\Model\Mydata;
use App\Model\Mydata2;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/mydata','MydataController');
Route::apiResource('/obj','ObjController');

Route::post('/mydata/search', function(Request $request) {
   // return Mydata::where('mdate',$request->mdate);

    $data1=Mydata::where('id','!=',-1);
    $data2=Mydata2::where('id','!=',-1);


    if($request->mdate!="") {

        $data1 = Mydata::where('mdate', $request->mdate);
        $data2 = Mydata2::where('mdate', $request->mdate);
    }


  if($request->posx!="") {
        $data1->where('posx', $request->posx);
        $data2->where('posx', $request->posx);

    }

    if($request->posy!="") {
        $data1->where('posy', $request->posy);
        $data2->where('posy', $request->posy);

    }
    $data1=$data1->get();
    $data2=$data2->get();

    $data1->toArray();
    $data2->toArray();

  return Response::json(array('data1'=>$data1,'data2'=>$data2));




    // return $request->mdate;
});


Route::apiResource('/mydata2','Mydata2Controller');


