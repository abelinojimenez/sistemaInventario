<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class razonesMovimientoController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombrerazonesMovimiento");

		DB::table($table)->where($idname,'=',$idvalue)->update(["descripcion"=>$nombre]);
    	return redirect($request->input('path'));
	}
    //registrar una nueva razon para los movimientos 
    function agregarRazonesMovimiento(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	DB::insert('insert into razonmovimiento(descripcion) values(?)',[$request->input('nombrerazonesMovimiento')]);
    	return redirect($request->input('seccion'));
    	return "".$request->input('nombrerazonesMovimiento');
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');

    	$results=DB::select("select * from razonmovimiento;");
    	$data=[];
    	$data['tablaName']="razonmovimiento";
    	$data['nombreaccion']="Razon Movimiento";
    	$data['path']="razonesMovimiento";
    	$data['results']=$results;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","DESCRIPCION"];
    	return view('tables',$data);
    }
}
