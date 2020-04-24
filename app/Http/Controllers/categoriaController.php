<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombrecategoria");

		DB::table($table)->where($idname,'=',$idvalue)->update(["nombre"=>$nombre]);
    	return redirect($request->input('path'));
	}
    //metodo para registrar en la db la informacion
    function agregarCategoria(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	DB::insert('insert into categoria(nombre) values(?)',[$request->input('nombrecategoria')]);
    	return redirect($request->input('seccion'));
    	return "".$request->input('nombrecategoria');
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');

    	$results=DB::select("select * from categoria;");
    	$data=[];
    	$data['tablaName']="Categoria";
    	$data['nombreaccion']="Categoria";
    	$data['path']="categoria";
    	$data['results']=$results;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","NOMBRE"];
    	return view('tables',$data);
    }




/*obtener ids*/
    function getIDS($idName,$results){
    	$ids=[];
    	for($i=0;$i<count($results);$i++){
    		array_push($ids,results[$i][$idName]);
    	}
    }
    function getIdName($data){
    	return key($data); 	
    }
}
