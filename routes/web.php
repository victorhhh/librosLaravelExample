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

Route::get('terror',[
    'uses' =>'RestController@terror',
    'as' => 'restView'
]);
Route::get('prueba', function (){
   return view('video');
});

Route::get('ciencia', [
    'uses'=> 'RestController@ciencia'
]);
Route::get('programacion', [
    'uses'=> 'RestController@programacion'
]);
Route::get('base', [
    'uses'=> 'RestController@base'
]);
Route::get('historia', [
    'uses'=> 'RestController@historia'
]);