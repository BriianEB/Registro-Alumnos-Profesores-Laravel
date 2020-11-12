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

Route::get('/', 'HomeController@index');
Route::get('color', 'HomeController@color');

Route::prefix('alumnos')->group(function () {
    Route::get('{alumno}', 'AlumnosController@ver')->where('alumno', '[0-9]+');
    Route::get('crear', 'AlumnosController@crear');
    Route::post('guardar', 'AlumnosController@guardar');
});

Route::prefix('profesores')->group(function () {
    Route::get('{profesor}', 'ProfesoresController@ver')->where('profesor', '[0-9]+');
    Route::get('crear', 'ProfesoresController@crear');
    Route::post('guardar', 'ProfesoresController@guardar');
});
