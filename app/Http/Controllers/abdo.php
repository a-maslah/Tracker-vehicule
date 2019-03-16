<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class abdo extends Controller
{
   
    public function insertform(){
    return view('modifier');
    } 

    public function insert(Request $request){
    $first_name = $request->input('name');
    $last_name = $request->input('email');
    $city_name = $request->input('tele');
    $email = $request->input('ville');
    $data=array('name'=>$first_name,"email"=>$last_name,"tele"=>$city_name,"ville"=>$email);
    DB::table('utilisateurs')->insert($data);
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/insert">Click Here</a> to go back.';
    }
    }
    

