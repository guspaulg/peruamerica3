<?php

Route::get('/','InicioController@index' );

Route::get('/clientes','ClientesController@ver' );

Route::get('/tarjetas','TarjetasController@mostrar' );
Route::post('/tarjetas','TarjetasController@mostrar' );

Route::get('/gigantografias','GigantografiasController@mostrar' );
Route::post('/gigantografias','GigantografiasController@mostrar' );

Route::get('/volantes','VolantesController@mostrar' );
Route::post('/volantes','VolantesController@mostrar' );

Route::get('nuevo/registro','RegistroController@correo' );
Route::post('nuevo/registro','RegistroController@correo' );

Route::get('nuevo/registro/completar','RegistrocompletarController@datos' );
Route::post('nuevo/registro/completar','RegistrocompletarController@datos' );




Route::get('carrito/confirm','ConfirmarpedidoController@ver' );

Route::get('carrito/datos','CartController@datos');
Route::post('carrito/datos','CartController@datos');

Route::get('carrito/datosconfirmados','CartdatosController@datos' ); 
Route::post('carrito/datosconfirmados','CartdatosController@datos' ); 








Route::get('/iniciarsesion','UsuarioController@sesion' );
Route::post('/iniciarsesion','UsuarioController@sesion' );

Route::get('/micuenta','MicuentaController@ver' );

Route::get('contrasena/nuevo','UsuariocontrasenaController@cambiar' );
Route::post('contrasena/nuevo','UsuariocontrasenaController@cambiar' );

Route::get('/cerrar','SalirController@sesion' );

Route::get('/mispedidos','MispedidosController@ver' );






Route::get('/admin/pedidos','AdminpedidosController@ver' );





App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});




