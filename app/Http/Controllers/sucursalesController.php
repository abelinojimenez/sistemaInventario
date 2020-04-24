<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sucursalesController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombresucursales");

		DB::table($table)->where($idname,'=',$idvalue)->update(["nombre"=>$nombre]);
    	return redirect($request->input('path'));
	}
    //creacion de nueva sucursal
    function agregarSucursal(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	DB::insert('insert into sucursales(nombre) values(?)',[$request->input('nombresucursales')]);
    	return redirect($request->input('seccion'));
    	return "".$request->input('nombresucursales');
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');

    	$results=DB::select("select * from sucursales;");
    	$data=[];
    	$data['tablaName']="sucursales";
    	$data['nombreaccion']="Sucursales";
    	$data['path']="sucursales";
    	$data['results']=$results;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","NOMBRE"];
    	return view('tables',$data);
    }
}
