<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class estanteriaController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombreestanteria");
    	$idPasillo=$request->input("idPasillo");

		DB::table($table)->where($idname,'=',$idvalue)->update(["descripcion"=>$nombre,"idPasillo"=>$idPasillo]);
    	return redirect($request->input('path'));
	}
    //registrar una nueva estanteria
    function agregarEstanteria(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');

    	DB::insert('insert into estanteria(descripcion,idPasillo) values(?,?)',[$request->input('nombreestanteria'),$request->input('idPasillo')]);
    	return redirect($request->input('seccion'));
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	$results=DB::select("SELECT e.idEstanteria,e.descripcion,p.descripcion as pasillo FROM estanteria e inner join pasillo p on p.idPasillo=e.idPasillo;");
    	$pasillos=DB::select("SELECT * FROM pasillo;");
    	$data=[];
    	$data['tablaName']="estanteria";
    	$data['nombreaccion']="Estanteria";
    	$data['path']="estanteria";
    	$data['results']=$results;
    	$data['pasillos']=$pasillos;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","DESCRIPCION","PASILLO"];
    	return view('tables',$data);
    }
}
