<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteTableController extends Controller
{
    function delete(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	$seccionPagina=$request->input('path');
    	$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input($idname);
    	DB::table($table)->where($idname,'=',$idvalue)->delete();
    	return redirect($seccionPagina);
    }
}
