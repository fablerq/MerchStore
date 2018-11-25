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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Main
Route::resource('users', 'UserController', [
    'except' => ['edit']
  ]);

Route::resource('products', 'ProductController', [
    'except' => ['edit']
  ]);

Route::resource('orders', 'OrderController', [
    'except' => ['edit']
  ]);

//Additional
  Route::resource('faculties', 'FacultyController', [
    'except' => ['edit']
  ]);

Route::resource('photos', 'PhotoController', [
    'except' => ['edit']
  ]);

Route::resource('sizes', 'SizeController', [
    'except' => ['edit']
  ]);

Route::resource('statuses', 'StatusController', [
    'except' => ['edit']
  ]);

Route::resource('types', 'TypeController', [
    'except' => ['edit']
  ]);