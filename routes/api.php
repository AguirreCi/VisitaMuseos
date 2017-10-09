<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/museos', 'Api\MuseoController@all');

Route::get('/calificaciones', 'Api\CalificacionController@all');
Route::get('/ranking', 'Api\CalificacionController@ranking');
Route::get('/museo/{id}/calificaciones', 'Api\CalificacionController@porMuseo');
Route::post('/ins/calificacion', 'Api\CalificacionController@nueva');

Route::get('/museo/{id}/experiencias', 'Api\ExperienciaController@porMuseo');
Route::get('/{id}/experiencias', 'Api\ExperienciaController@porId');
Route::post('/ins/experiencia', 'Api\ExperienciaController@nueva');

Route::get('/juego/{id}/puntajes', 'Api\PuntajeController@porJuego');
Route::post('/ins/puntaje', 'Api\PuntajeController@nueva');

Route::post('/users', 'Api\UserController@users');

Route::post('/guardar', 'Api\ArchivosController@guardar');

Route::get('/descarga/{nombre}', 'Api\ArchivosController@download');
