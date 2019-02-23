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
    return view('welcome');
});


Route::get('/about', 'FirstController@show');
Route::get('/usmc', 'UsmcController@guns');

Route::get('/', function () {
    return view('jnep-theme.jnep-main', ['name' => 'James', 'name_2' => 'Oleg Universal']);
});

Route::get('/usmc', function () {
    return view('usmc-theme.usmc-guns', ['name' => 'James', 'name_2' => 'Oleg Universal']);
});