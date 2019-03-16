<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;




class TestController extends Controller {

    public function insertform(Request $request){
        $first_name = $request->input('laptitude');
        $last_name = $request->input('longitude');
        $city_name = $request->input('ville');
        // $data=array('laptitude'=>$first_name,"longitude"=>$last_name,"ville"=>$city_name);
        $data= DB::select('select * from location');
      return view('location',['location'=>$data]);
} 

}



