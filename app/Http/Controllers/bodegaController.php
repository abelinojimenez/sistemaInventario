<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bodegaController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombrebodegas");

		DB::table($table)->where($idname,'=',$idvalue)->update(["nombre"=>$nombre]);
    	return redirect($request->input('path'));
	}
    //registrar nueva bodega en la base de datos
    function agregarBodega(Request $request){
    	if(!($request->session()->has('autorizacion')))
    		return redirect('/');

    	DB::insert('insert into bodega(nombre) values(?)',[$request->input('nombreBodega')]);
    	return redirect($request->input('seccion'));
    	return "".$request->input('nombreBodega');
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	$results=DB::select("select * from bodega;");
    	$data=[];
    	$data['tablaName']="bodega";
    	$data['nombreaccion']="Bodega";
    	$data['path']="bodegas";
    	$data['results']=$results;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","NOMBRE"];
    	return view('tables',$data);
    }
}
