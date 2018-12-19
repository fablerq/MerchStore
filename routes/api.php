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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//AUTH
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('getuser', 'AuthController@getuser');

//Main
Route::resource('users', 'UserController', [
    'except' => ['edit'],
  ]);

Route::resource('products', 'ProductController', [
    'except' => ['edit'],
  ]);

Route::post('paginateproducts/{count}/{typeid}/{facultyid}', 'ProductController@paginate');

Route::post('productscount/{typeid}/{facultyid}', 'ProductController@productscount');

Route::resource('orders', 'OrderController', [
    'except' => ['edit'],
  ]);

Route::get('showforuser/{count}', 'OrderController@showforuser');

//Additional
Route::resource('faculties', 'FacultyController', [
    'except' => ['edit'],
  ]);

Route::resource('photos', 'PhotoController', [
    'except' => ['edit'],
  ]);

Route::resource('sizes', 'SizeController', [
    'except' => ['edit'],
  ]);

Route::resource('statuses', 'StatusController', [
    'except' => ['edit'],
  ]);

Route::resource('types', 'TypeController', [
    'except' => ['edit'],
  ]);

Route::resource('roles', 'RoleController', [
    'except' => ['edit'],
  ]);

Route::resource('paymentmethods', 'PaymentMethodController', [
    'except' => ['edit'],
  ]);

Route::resource('comments', 'CommentController', [
    'except' => ['edit'],
  ]);

Route::resource('productsvariants', 'ProductsVariantsController', [
    'except' => ['edit'],
  ]);

Route::resource('colors', 'ColorController', [
    'except' => ['edit'],
  ]);

Route::resource('faqs', 'FAQController', [
    'except' => ['edit'],
  ]);

//Many-to-may

Route::resource('favourites', 'FavouriteController', [
  'except' => ['edit', 'destroy', 'index'],
]);

Route::delete('favourites/delfavourite/{userid}/{productid}', 'FavouriteController@delfavourite');
