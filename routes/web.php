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
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::post('message/add/{post}', ['uses' => 'HomeController@AddMessage', 'as' => 'messages.add']);


Route::get('message/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'message.edit'])->where(['id' => '[0-9]+']);


Route::get('prom-razdel/', ['uses' => 'HomeController@PromRazdelList', 'as' => 'prom-razdel.PromRazdelList']);
Route::get('add-prom-razdel/', ['uses' => 'HomeController@AddPromRazdel', 'as' => 'prom-razdel.AddPromRazdel']);
//    return view('welcome');
    //dd([1,2,3]);
//});


//Route::get();//GET

/*Route::post();//POST

Route::delete();//DELETE
*/