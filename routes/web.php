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

//Route::get('/', function () {
    //return view('welcome');
//});

//Vistas
Route::get('/', 'VistasController@inicio')->name('inicio');

Route::get('visita', 'VistasController@visita')->name('visita');

Route::get('experiencia_cabildo', 'VistasController@experiencia_cabildo')->name('experiencia_cabildo');

Route::get('conversemos', 'VistasController@conversemos')->name('conversemos');

Route::get('el_museo_segun', 'VistasController@el_museo_segun')->name('el_museo_segun');

Route::get('entretenimiento', 'VistasController@entretenimiento')->name('entretenimiento');

Route::get('la_coleccion', 'VistasController@la_coleccion')->name('la_coleccion');

Route::get('recorrido_virtual', 'VistasController@recorrido_virtual')->name('recorrido_virtual');

Route::get('su_historia', 'VistasController@su_historia')->name('su_historia');

Route::get('el_edificio', 'VistasController@el_edificio')->name('el_edificio');

Route::get('publicaciones', 'VistasController@publicaciones')->name('publicaciones');
Route::get('vision/{id}', 'VistasController@vision')->name('vision');

Route::get('mapa', function() {
    return view('plantilla.map');
})->name('mapa');
Route::get('sala', function() {
    return view('plantilla.sala');
})->name('sala');

Route::get('crear', 'MuseoSegunController@crear')->name('crear');
Route::get('crear_obra', 'MuseoSegunController@crear_obra')->name('crear_obra');
Route::get('crear_foto', 'MuseoSegunController@crear_foto')->name('crear_foto');
Route::get('crear_audio', 'MuseoSegunController@crear_audio')->name('crear_audio');


Route::get('puzzle_guemes', 'VistasController@puzzle_guemes')->name('puzzle_guemes');
Route::get('puzzle_belgrano', 'VistasController@puzzle_belgrano')->name('puzzle_belgrano');
Route::get('puzzle_cabildo', 'VistasController@puzzle_cabildo')->name('puzzle_cabildo');
Route::get('rompecabezas/{id}', 'VistasController@rompecabezas')->name('rompecabeza');


Route::get('cruci1', 'VistasController@cruci1')->name('cruci1');
Route::get('cruci2', 'VistasController@cruci2')->name('cruci2');
Route::get('cruci3', 'VistasController@cruci3')->name('cruci3');
Route::get('cruci/{id}', 'VistasController@cruci')->name('cruci');

//MuseoSegun
Route::post('el_museo_segun/guardar', 'MuseoSegunController@guardar')->name('guardar');
Route::post('el_museo_segun/obras', 'MuseoSegunController@guardar_obra')->name('guardar_obra');
Route::post('cambiar_fondo', 'MuseoSegunController@cambiar_fondo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas para el login social
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');