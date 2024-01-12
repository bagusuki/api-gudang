<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //barang
    $router->get('/barang', 'barangController@index');
    $router->get('/barang/{id}', 'barangController@show');
    $router->post('/barang', 'barangController@store');
    $router->put('/barang/{id}', 'barangController@update');
    $router->delete('/barang/{id}', 'barangController@destroy');
    //karyawan
    $router->get('/karyawan', 'karyawanController@index');
    $router->get('/karyawan/{id}', 'karyawanController@show');
    $router->post('/karyawan', 'karyawanController@store');
    $router->put('/karyawan/{id}', 'karyawanController@update');
    $router->delete('/karyawan/{id}', 'karyawanController@destroy');
    //pemasok
    $router->get('/pemasok', 'pemasokController@index');
    $router->get('/pemasok/{id}', 'pemasokController@show');
    $router->post('/pemasok', 'pemasokController@store');
    $router->put('/pemasok/{id}', 'pemasokController@update');
    $router->delete('/pemasok/{id}', 'pemasokController@destroy');
    //penerimaan_barang
    $router->get('/penerimaan_barang', 'penerimaan_barangController@index');
    $router->get('/penerimaan_barang/{id}', 'penerimaan_barangController@show');
    $router->post('/penerimaan_barang', 'penerimaan_barangController@store');
    $router->put('/penerimaan_barang/{id}', 'penerimaan_barangController@update');
    $router->delete('/penerimaan_barang/{id}', 'penerimaan_barangController@destroy');
    //pengeluaran_barang
    $router->get('/pengeluaran_barang', 'pengeluaran_barangController@index');
    $router->get('/pengeluaran_barang/{id}', 'pengeluaran_barangController@show');
    $router->post('/pengeluaran_barang', 'pengeluaran_barangController@store');
    $router->put('/pengeluaran_barang/{id}', 'pengeluaran_barangController@update');
    $router->delete('/pengeluaran_barang/{id}', 'pengeluaran_barangController@destroy');

});