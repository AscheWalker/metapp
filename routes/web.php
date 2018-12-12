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

Route::get('/', 'WelcomeController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/actividades', 'ActividadesController@show')->name('Actividades');
Route::get('/actividades/ver', 'ActividadesController@show2')->name('VerActividades');
Route::get('/actividades/crear', 'ActividadesController@create')->name('CrearActividades');
Route::get('/actividades/nuevo', 'ActividadesController@store');

Route::get('/sesiones', 'SesionesController@show')->name('Sesiones');
Route::get('/sesiones/ver', 'SesionesController@show2')->name('VerSesiones');
Route::get('/sesiones/crear', 'SesionesController@create')->name('CrearSesiones');
Route::get('/sesiones/nuevo', 'SesionesController@store');

Route::get('/cursos', 'CursosController@show')->name('Cursos');
Route::get('/cursos/ver', 'CursosController@show2')->name('VerCursos');
Route::get('/cursos/crear', 'CursosController@create')->name('CrearCursos');
Route::get('/cursos/nuevo', 'CursosController@store');

Route::get('/pasos', 'PasosController@show')->name('Pasos');
Route::post('/pasos/ver', 'PasosController@show2')->name('VerPasos');
Route::get('/pasos/crear', 'PasosController@create')->name('CrearPasos');
Route::get('/pasos/nuevo', 'PasosController@store');

Route::get('/subpasos', 'SubPasosController@show')->name('SubPasos');
Route::get('/subpasos/ver', 'SubPasosController@show2')->name('VerSubPasos');
Route::get('/subpasos/crear', 'SubPasosController@create')->name('CrearSubPasos');
Route::get('/subpasos/nuevo', 'SubPasosController@store');

Route::get('/planeamiento/{id}', 'Planeamiento@show')->name('Planeamiento');
Route::get('/planeamientocheck', 'Planeamiento@check')->name('CheckPlaneamiento');
Route::get('/ejecucioncheck', 'Planeamiento@checkejecucion')->name('CheckEjecucion');
