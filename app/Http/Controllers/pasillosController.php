<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pasillosController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombrepasillos");
    	$idBodega=$request->input("idBodega");

		DB::table($table)->where($idname,'=',$idvalue)->update(["descripcion"=>$nombre,"idBodega"=>$idBodega]);
    	return redirect($request->input('path'));
	}
    //creacion de un nuevo pasiloo
    function agregarPasillos(Request $request){
    		if(!(session()->has('autorizacion')))
    		return redirect('/');

    	DB::insert('insert into pasillo(descripcion,idBodega) values(?,?)',[$request->input('nombrepasillos'),$request->input('idBodega')]);
    	return redirect($request->input('seccion'));
    }
    /*funcion que se encarga de mostrar la pagina*/
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	$results=DB::select("SELECT p.idPasillo,p.descripcion,b.nombre FROM pasillo p inner join bodega b on b.idBodega=p.idBodega;");
    	$bodegas=DB::select("SELECT * FROM bodega;");
    	$data=[];
    	$data['tablaName']="pasillo";
    	$data['nombreaccion']="Pasillo";
    	$data['path']="pasillos";
    	$data['results']=$results;
    	$data['bodegas']=$bodegas;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","NOMBRE","BODEGA"];
    	return view('tables',$data);
    }
}
