<?php
namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use app\database\migtations\BDtast;
class editerprofile extends Controller

    {

   

    public function form1(Request $request){
        $first_name = $request->input('Name');
        $last_name = $request->input('Email');
        $city_name = $request->input('Ville');
        // $data=array('laptitude'=>$first_name,"longitude"=>$last_name,"ville"=>$city_name);
        $data= DB::select('select * from modification');
      return view('maslah',['location'=>$data]);
} 

}
    



