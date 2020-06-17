<?php

use Illuminate\Support\Facades\Route;

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

Route:group(['middelware'=>'auth'],function(){
    route::get('/dashboard','dashboardController@index');
})

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function($name){
    return view('hello', compact('name') );
});

Route::get('/restaurants', 'RestaurantsController@index');
Route::get('/restaurants/create','RestaurantsController@create');
Route::get('/restaurants/show/{review}','RestaurantsController@show');
Route::post('/restaurants/create','RestaurantsController@store');
Route::get('/restaurants/edit/{id}','RestaurantsController@edit');
Route::patch('/restaurants/edit/{id}','RestaurantsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
