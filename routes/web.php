<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('welcome');
});
Route::resource('/user', UserController::class);


Route::get('/home', function () {
    return Redirect::to('/dashboard', 302);
});
Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/profile', function () {
        // Logic for the profile route
    });

    Route::get('/settings', function () {
        // Logic for the settings route
    });
});
Route::resource('/product', ProductController::class);

Route::PATCH('/user/{user}', [DemoController::class]);

//   GET|HEAD        user ..........        user.index › UserController@index
//   POST            user ...........       user.store › UserController@store
//   GET|HEAD        user/create .....      user.create › UserController@create
//   GET|HEAD        user/{user} .......    user.show › UserController@show
//   PUT|PATCH       user/{user} .......    user.update › UserController@update
//   DELETE          user/{user} ........   user.destroy › UserController@destroy
//   GET|HEAD        user/{user}/edit ..... user.edit › UserController@edit

//   GET|HEAD     product . product.index › ProductController@index
//   POST            product . product.store › ProductController@store
//   GET|HEAD        product/create ........... product.create › ProductController@create
//   GET|HEAD        product/{product} ............ product.show › ProductController@show
//   PUT|PATCH       product/{product} ........ product.update › ProductController@update
//   DELETE          product/{product} ...... product.destroy › ProductController@destroy
//   GET|HEAD        product/{product}/edit ....... product.edit › ProductController@edit
