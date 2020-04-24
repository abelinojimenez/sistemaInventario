<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'loginController@login');
Route::get('/login', 'loginController@login');
Route::get('/logout','loginController@logout');
Route::get('/version/{name}/{data}','examenControler@showMessage');
/*Route::get('/version/{name}',function(){
	return "hola";
});*/
Route::get('user/profile', function () {
    //
})->name('profile');
//return Route::redirect('/version',404);


/*router para */
Route::get('/categoria','categoriaController@showPage');
Route::get('/sucursales','sucursalesController@showPage');
Route::get('/bodegas','bodegaController@showPage');
Route::get('/pasillos','pasillosController@showPage');
Route::get('/estanteria','estanteriaController@showPage');
Route::get('/tiposProducto','tiposProductosController@showPage');
Route::get('/razonesMovimiento','razonesMovimientoController@showPage');
Route::get('/ingresoSalidaProducto','ingresoEgresoController@showPage');
Route::get('/listarStock','listaStockController@showPage');


/*resquest post*/
Route::post('categoria/add','categoriaController@agregarCategoria');
Route::post('sucursales/add','sucursalesController@agregarSucursal');
Route::post('bodegas/add','bodegaController@agregarBodega');
Route::post('pasillos/add','pasillosController@agregarPasillos');
Route::post('estanteria/add','estanteriaController@agregarEstanteria');
//Route::post('sucursales/add','sucursalesController@agregarSucursal');
Route::post('tiposProducto/add','tiposProductosController@agregarTiposProducto');
Route::post('razonesMovimiento/add','razonesMovimientoController@agregarRazonesMovimiento');
Route::post('ingresoSalidaProducto/add','ingresoEgresoController@movimiento');
Route::post('listarStock/','listaStockController@Listar');

/*eliminar campo de cualquier tabla de la base de dato*/
Route::delete('data/delete','deleteTableController@delete');

/*Actualizar */
Route::put('data/actualizarLugar','ingresoEgresoController@actualizarEstado');

Route::put('categoria/actualizar','categoriaController@actualizar');
Route::put('sucursales/actualizar','sucursalesController@actualizar');
Route::put('bodegas/actualizar','bodegaController@actualizar');
Route::put('razonesMovimiento/actualizar','razonesMovimientoController@actualizar');
Route::put('pasillos/actualizar','pasillosController@actualizar');
Route::put('estanteria/actualizar','estanteriaController@actualizar');
Route::put('tiposProducto/actualizar','tiposProductosController@actualizar');
Route::put('ingresoSalidaProducto/actualizar','ingresoEgresoController@actualizar');