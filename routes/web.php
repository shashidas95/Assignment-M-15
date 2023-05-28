<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/user', UserController::class);

//   GET|HEAD        user ..........        user.index › UserController@index
//   POST            user ...........       user.store › UserController@store
//   GET|HEAD        user/create .....      user.create › UserController@create
//   GET|HEAD        user/{user} .......    user.show › UserController@show
//   PUT|PATCH       user/{user} .......    user.update › UserController@update
//   DELETE          user/{user} ........   user.destroy › UserController@destroy
//   GET|HEAD        user/{user}/edit ..... user.edit › UserController@edit

