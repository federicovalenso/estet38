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
Route::auth();
Route::view('/', 'home');
Route::group(
    [
        'name' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['auth', 'role:admin']
    ],
    function () {
        Route::view('/', 'admin.index');
        Route::resource('category', 'CategoryController');
        Route::resource('product', 'ProductController');
        Route::resource('productcategory', 'ProductCategoryController');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
