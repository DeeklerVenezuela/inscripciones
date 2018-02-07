<?php

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('admin', function () {
    return view('admin_template');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(
[
    'prefix' => 'provincias',
], function () {

    Route::get('/', 'ProvinciasController@index')
         ->name('provincias.provincia.index');

    Route::get('/create','ProvinciasController@create')
         ->name('provincias.provincia.create');

    Route::get('/show/{provincia}','ProvinciasController@show')
         ->name('provincias.provincia.show')
         ->where('id', '[0-9]+');

    Route::get('/{provincia}/edit','ProvinciasController@edit')
         ->name('provincias.provincia.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ProvinciasController@store')
         ->name('provincias.provincia.store');
               
    Route::put('provincia/{provincia}', 'ProvinciasController@update')
         ->name('provincias.provincia.update')
         ->where('id', '[0-9]+');

    Route::delete('/provincia/{provincia}','ProvinciasController@destroy')
         ->name('provincias.provincia.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'colegios',
], function () {

    Route::get('/', 'ColegiosController@index')
         ->name('colegios.colegio.index');

    Route::get('/create','ColegiosController@create')
         ->name('colegios.colegio.create');

    Route::get('/show/{colegio}','ColegiosController@show')
         ->name('colegios.colegio.show')
         ->where('id', '[0-9]+');

    Route::get('/{colegio}/edit','ColegiosController@edit')
         ->name('colegios.colegio.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ColegiosController@store')
         ->name('colegios.colegio.store');
               
    Route::put('colegio/{colegio}', 'ColegiosController@update')
         ->name('colegios.colegio.update')
         ->where('id', '[0-9]+');

    Route::delete('/colegio/{colegio}','ColegiosController@destroy')
         ->name('colegios.colegio.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'distritosms',
], function () {

    Route::get('/', 'DistritosmsController@index')
         ->name('distritosms.distritosms.index');

    Route::get('/create','DistritosmsController@create')
         ->name('distritosms.distritosms.create');

    Route::get('/show/{distritosms}','DistritosmsController@show')
         ->name('distritosms.distritosms.show')
         ->where('id', '[0-9]+');

    Route::get('/{distritosms}/edit','DistritosmsController@edit')
         ->name('distritosms.distritosms.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'DistritosmsController@store')
         ->name('distritosms.distritosms.store');
               
    Route::put('distritosms/{distritosms}', 'DistritosmsController@update')
         ->name('distritosms.distritosms.update')
         ->where('id', '[0-9]+');

    Route::delete('/distritosms/{distritosms}','DistritosmsController@destroy')
         ->name('distritosms.distritosms.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'frente_movimientos',
], function () {

    Route::get('/', 'FrenteMovimientosController@index')
         ->name('frente_movimientos.frente_movimientos.index');

    Route::get('/create','FrenteMovimientosController@create')
         ->name('frente_movimientos.frente_movimientos.create');

    Route::get('/show/{frenteMovimientos}','FrenteMovimientosController@show')
         ->name('frente_movimientos.frente_movimientos.show')
         ->where('id', '[0-9]+');

    Route::get('/{frenteMovimientos}/edit','FrenteMovimientosController@edit')
         ->name('frente_movimientos.frente_movimientos.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'FrenteMovimientosController@store')
         ->name('frente_movimientos.frente_movimientos.store');
               
    Route::put('frente_movimientos/{frenteMovimientos}', 'FrenteMovimientosController@update')
         ->name('frente_movimientos.frente_movimientos.update')
         ->where('id', '[0-9]+');

    Route::delete('/frente_movimientos/{frenteMovimientos}','FrenteMovimientosController@destroy')
         ->name('frente_movimientos.frente_movimientos.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'municipios',
], function () {

    Route::get('/', 'MunicipiosController@index')
         ->name('municipios.municipios.index');

    Route::get('/create','MunicipiosController@create')
         ->name('municipios.municipios.create');

    Route::get('/show/{municipios}','MunicipiosController@show')
         ->name('municipios.municipios.show')
         ->where('id', '[0-9]+');

    Route::get('/{municipios}/edit','MunicipiosController@edit')
         ->name('municipios.municipios.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'MunicipiosController@store')
         ->name('municipios.municipios.store');
               
    Route::put('municipios/{municipios}', 'MunicipiosController@update')
         ->name('municipios.municipios.update')
         ->where('id', '[0-9]+');

    Route::delete('/municipios/{municipios}','MunicipiosController@destroy')
         ->name('municipios.municipios.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'profesion_oficios',
], function () {

    Route::get('/', 'ProfesionOficiosController@index')
         ->name('profesion_oficios.profesion_oficios.index');

    Route::get('/create','ProfesionOficiosController@create')
         ->name('profesion_oficios.profesion_oficios.create');

    Route::get('/show/{profesionOficios}','ProfesionOficiosController@show')
         ->name('profesion_oficios.profesion_oficios.show')
         ->where('id', '[0-9]+');

    Route::get('/{profesionOficios}/edit','ProfesionOficiosController@edit')
         ->name('profesion_oficios.profesion_oficios.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ProfesionOficiosController@store')
         ->name('profesion_oficios.profesion_oficios.store');
               
    Route::put('profesion_oficios/{profesionOficios}', 'ProfesionOficiosController@update')
         ->name('profesion_oficios.profesion_oficios.update')
         ->where('id', '[0-9]+');

    Route::delete('/profesion_oficios/{profesionOficios}','ProfesionOficiosController@destroy')
         ->name('profesion_oficios.profesion_oficios.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'recintos',
], function () {

    Route::get('/', 'RecintosController@index')
         ->name('recintos.recintos.index');

    Route::get('/create','RecintosController@create')
         ->name('recintos.recintos.create');

    Route::get('/show/{recintos}','RecintosController@show')
         ->name('recintos.recintos.show')
         ->where('id', '[0-9]+');

    Route::get('/{recintos}/edit','RecintosController@edit')
         ->name('recintos.recintos.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'RecintosController@store')
         ->name('recintos.recintos.store');
               
    Route::put('recintos/{recintos}', 'RecintosController@update')
         ->name('recintos.recintos.update')
         ->where('id', '[0-9]+');

    Route::delete('/recintos/{recintos}','RecintosController@destroy')
         ->name('recintos.recintos.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'padrones',
], function () {

    Route::get('/', 'PadronesController@index')
         ->name('padrones.padrones.index');

    Route::get('/create','PadronesController@create')
         ->name('padrones.padrones.create');

    Route::get('/show/{padrones}','PadronesController@show')
         ->name('padrones.padrones.show')
         ->where('id', '[0-9]+');

    Route::get('/{padrones}/edit','PadronesController@edit')
         ->name('padrones.padrones.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'PadronesController@store')
         ->name('padrones.padrones.store');
               
    Route::put('padrones/{padrones}', 'PadronesController@update')
         ->name('padrones.padrones.update')
         ->where('id', '[0-9]+');

    Route::delete('/padrones/{padrones}','PadronesController@destroy')
         ->name('padrones.padrones.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'padroninternos',
], function () {

    Route::get('/', 'PadroninternosController@index')
         ->name('padroninternos.padroninternos.index');

    Route::get('/create','PadroninternosController@create')
         ->name('padroninternos.padroninternos.create');

    Route::get('/show/{padroninternos}','PadroninternosController@show')
         ->name('padroninternos.padroninternos.show')
         ->where('id', '[0-9]+');

    Route::get('/{padroninternos}/edit','PadroninternosController@edit')
         ->name('padroninternos.padroninternos.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'PadroninternosController@store')
         ->name('padroninternos.padroninternos.store');
               
    Route::put('padroninternos/{padroninternos}', 'PadroninternosController@update')
         ->name('padroninternos.padroninternos.update')
         ->where('id', '[0-9]+');

    Route::delete('/padroninternos/{padroninternos}','PadroninternosController@destroy')
         ->name('padroninternos.padroninternos.destroy')
         ->where('id', '[0-9]+');

    Route::get('/{padroninternos}/bycedula', 'PadroninternosController@GetByCedula')
         ->name('padroninternos.padroninternos.bycedula');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
