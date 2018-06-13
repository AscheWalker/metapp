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

Route::get('/cursos', 'CursosController@show')->name('Cursos');
Route::get('/cursos/ver', 'CursosController@show2')->name('VerCursos');
Route::get('/cursos/crear', 'CursosController@create')->name('CrearCursos');
Route::get('/cursos/nuevo', 'CursosController@store');
