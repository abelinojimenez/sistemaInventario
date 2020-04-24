<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listaStockController extends Controller
{
    //
    function Listar(Request $request){
   }
   function showPage(){
   	if(!(session()->has('autorizacion')))
    		return redirect('/');
    	
   		$bodegas=DB::select("SELECT p.idproducto,p.descripcion producto,b.nombre bodega,sum(asp.cantidad) cantidad,p.precioCosto*cantidad precioCostoTotal,p.precioVenta*cantidad precioVentaTotal FROM asignacionproducto asp inner join producto p on p.idProducto=asp.idProducto inner join bodega b on b.idBodega=asp.idBodega where asp.estado=1 GROUP by asp.idSucursal order by asp.idProducto,asp.idSucursal");

   		$sucursales=DB::select("SELECT p.idproducto,p.descripcion producto,s.nombre sucursal,sum(asp.cantidad) cantidad,p.precioCosto*cantidad precioCostoTotal,p.precioVenta*cantidad precioVentaTotal FROM asignacionproducto asp inner join producto p on p.idProducto=asp.idProducto inner join sucursales s on s.idSucursal=asp.idSucursal where asp.estado=0 GROUP by asp.idSucursal order by asp.idProducto,asp.idSucursal;");


    	$data=[];
    	$data['tablaName']="asignacionproducto ";
    	$data['nombreaccion']="Kartex";
    	$data['path']="listaStock";
    	$data['bodegas']=$bodegas ;
    	$data['sucursales']=$sucursales;
    	if(!empty($results))
    		$data['idName']=key($results[0]); //obteniendo el nombre del idname de la tabla
    	$data['headerDataTable']=["ID","PRODUCTO","SUCURSAL","CANTIDAD","PRECIO COSTO TOTAL","PRECIO VENTA TOTAL"];
    	$data['headerDataTable2']=["ID","PRODUCTO","BODEGA","CANTIDAD","PRECIO COSTO TOTAL","PRECIO VENTA TOTAL"];
    	return view('tables',$data);
    }

}
