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
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('/posts/create', ['uses' => 'HomeController@create']);

//Route::get('/posts/{id}', ['uses' => 'HomeController@show']);
Route::get('/posts/{post}', ['uses' => 'HomeController@show']);

Route::post('/post', 'HomeController@store');

Route::get('/posts/{post}/edit', 'HomeController@edit');

Route::patch('/posts/{post}', 'HomeController@update');

Route::delete('/posts/{post}', 'HomeController@destroy');

/*
 * GET /
 * GET /posts/{id}
 * GET /posts/create
 * POST /posts
 * GET /posts/{id}/edit
 * PATCH /posts/{id}
 * DELETE /posts/{id}
 */




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