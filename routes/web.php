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

Route::get('/actividades', 'ActividadesController@show')->name('actividades');
Route::get('/actividades/ver', 'ActividadesController@show2')->name('actividades');

Route::get('/sesiones', 'SesionesController@show')->name('sesiones');
Route::get('/sesiones/ver', 'SesionesController@show2')->name('sesiones');

Route::get('/cursos', 'CursosController@show')->name('cursos');
Route::get('/cursos/ver', 'CursosController@show2')->name('cursos');
