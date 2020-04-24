<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class examenControler extends Controller
{
	function showMessage(){
    	return view('tables');

    	//$result=DB::select("select * from test2");
    	//insert
    	/*DB::table('test2')->insert(
    		['nombre'=>'minombre es esto']
    	);
    		return view("welcome",["data"=>["name"=>$name,"date"=>$date]]); */
    }
   
}
