<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiposProductosController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$nombre=$request->input("nombretiposProducto");
    	$codigotiposProducto=$request->input("codigotiposProducto");
    	$precioCosto=$request->input("precioCosto");
    	$precioVenta=$request->input("precioVenta");
    	$idCategoria=$request->input("idCategoria");

		DB::table($table)->where($idname,'=',$idvalue)->update(["descripcion"=>$nombre,"idCategoria"=>$idCategoria,"codigo"=>$codigotiposProducto,"precioCosto"=>$precioCosto,"precioVenta"=>$precioVenta]);
    	return redirect($request->input('path'));
	}
    // registrar Un nuevo tipo de producto
    function agregarTiposProducto(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	$data=array();
  		array_push($data,$request->input('codigotiposProducto'));
  		array_push($data,$request->input('nombretiposProducto'));
  		array_push($data,$request->input('precioCosto'));
  		array_push($data,$request->input('precioVenta'));
  		array_push($data,$request->input('idCategoria'));
    	DB::insert('insert into producto(codigo,descripcion,precioCosto,precioVenta,idCategoria) values(?,?,?,?,?)',$data); 
    	return redirect($request->input('seccion'));
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');

    	$results=DB::select("SELECT p.idProducto,p.codigo,p.descripcion,p.precioCosto,p.precioVenta,c.nombre categoria FROM producto p inner join categoria c on c.idCategoria=p.idCategoria;");
    	$categorias=DB::select("SELECT * FROM categoria;");
    	$data=[];
    	$data['tablaName']="producto";
    	$data['nombreaccion']="Tipos de Producto";
    	$data['path']="tiposProducto";
    	$data['results']=$results;
    	$data['categorias']=$categorias;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","CODIGO","DESCRIPCION","PRECIO COSTO","PRECIO VENTA","CATEGORIA"];
    	return view('tables',$data);
    }
}
