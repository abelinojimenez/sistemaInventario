<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{

	function logout(Request $request){
		$request->session()->forget("autorizacion");
		return redirect('/');
	}
	function sqlConsult($email,$password){
		$results=DB::select("select * from usuarios where correo=:email and clave=md5(:pass)",["email"=>$email,"pass"=>$password]);
	 	$i=0;
	 	foreach ($results as $resutl) {
	 		$i=1;
	 		break;
	 	}
	 	if($i>0)
	 		return true;
	 	else
	 		return false;
	}
    //
    function login(Request $request){
    		if($request->session()->has('autorizacion')){
    			return redirect('/categoria');
    		}else if($this->sqlConsult($request->input('email'),$request->input('password'))==true){
    			session(['autorizacion' => 'ok']);
    			return redirect("/categoria");
    		}else{
    			return view('login');
    		}
    }
}
