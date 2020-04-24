<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ingresoEgresoController extends Controller
{
	function actualizar(Request $request){
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input("idvalueactualization");
    	$cantidad=$request->input("cantidad");
    	$idPasillo=$request->input("idPasillo");
    	$idProducto=$request->input("idProducto");
    	$idSucursal=$request->input("idSucursal");
    	$idEstanteria=$request->input("idEstanteria");
    	$idrazonMovimiento=$request->input("idrazonMovimiento");
    	$estado=$request->input("estado");
    	$idBodega=$request->input("idBodega");

		DB::table($table)->where($idname,'=',$idvalue)->update(["cantidad"=>$cantidad,"idPasillo"=>$idPasillo,"idProducto"=>$idProducto,"idSucursal"=>$idSucursal,"idEstanteria"=>$idEstanteria,"idBodega"=>$idBodega,"idrazonMovimiento"=>$idrazonMovimiento,"estado"=>$estado]);
    	return redirect($request->input('path'));
	}
	/*funcion que se encarga de actualizar de bodega a sucursal*/
	function actualizarEstado(Request $request){
		$estado=$request->input('estado');
		$table=$request->input('tableName');
    	$idname=$request->input('idname');
    	$idvalue=$request->input($idname);
   
    	if($estado=="En Sucursal")
    		$estado=0;
    	else
    		$estado=1;


    	DB::table($table)->where($idname,'=',$idvalue)->update(["estado"=>$estado]);
    	return redirect($request->input('path'));

	}
   //funcion que se encarga de registrar el movimiento que se tendra a bodega o sucursal
    function movimiento(Request $request){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
    	$data=array();
  		array_push($data,$request->input('idProducto'));
  		array_push($data,$request->input('idSucursal'));
  		array_push($data,$request->input('idPasillo'));
  		array_push($data,$request->input('idEstanteria'));
  		array_push($data,$request->input('idBodega'));
  		array_push($data,$request->input('idrazonMovimiento'));
  		array_push($data,$request->input('estado'));
  		array_push($data,floatval($request->input('cantidad')));
    	DB::insert('insert into asignacionproducto(idProducto,idSucursal,idPasillo,idEstanteria,idBodega,idrazonMovimiento,estado,cantidad) values(?,?,?,?,?,?,?,?)',$data); 
    	return redirect($request->input('seccion'));
    }
    function showPage(){
    	if(!(session()->has('autorizacion')))
    		return redirect('/');


    	$results=DB::select("SELECT ap.idasignacionProducto,pr.descripcion producto,s.nombre sucursal,p.descripcion pasillo,est.descripcion estanteria,b.nombre bodega,r.descripcion razonmovimiento,ap.estado,ap.cantidad FROM asignacionproducto ap inner join producto pr on pr.idProducto=ap.idProducto inner join sucursales s on s.idSucursal=ap.idSucursal inner join pasillo p on p.idPasillo=ap.idPasillo inner join estanteria est on est.idEstanteria=ap.idEstanteria inner join bodega b on b.idBodega=ap.idBodega inner join razonmovimiento r on r.idrazonMovimiento=ap.idrazonMovimiento;");

    	foreach($results as $result){
    		if($result->estado=="0")
    			$result->estado="En Bodega";
    		else
    			$result->estado="En Sucursal";
    	}

    	$productos=DB::select("SELECT * FROM producto;");
    	$sucursales=DB::select("SELECT * FROM sucursales;");
    	$pasillos=DB::select("SELECT * FROM pasillo;");
    	$estanterias=DB::select("SELECT * FROM estanteria;");
    	$bodegas=DB::select("SELECT * FROM bodega;");
    	$razonmovimientos=DB::select("SELECT * FROM razonmovimiento;");
    	$data=[];
    	$data['tablaName']="asignacionproducto ";
    	$data['nombreaccion']="Ingreso y Egreso de Productos a bodega";
    	$data['path']="ingresoSalidaProducto";
    	$data['results']=$results;
    	$data['productos']=$productos;
    	$data['sucursales']=$sucursales;
    	$data['pasillos']=$pasillos;
    	$data['estanterias']=$estanterias;
    	$data['bodegas']=$bodegas;
    	$data['razonmovimientos']=$razonmovimientos;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","PRODUCTO","SUCURSAL","PASILLO","ESTANTERIA","BODEGA","MOVIMIENTO","ESTADO","CANTIDAD"];
    	return view('tables',$data);
    }

}
