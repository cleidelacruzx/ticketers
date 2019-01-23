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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController',['except' =>['destroy']]);

Route::resource('users', 'UserController')->names([
	'index'   => 'users.index',
    'create'  => 'users.create',
    'store'   => 'users.store',
    'show'    => 'users.show',
    'edit'    => 'users.edit',
    'update'  => 'users.update',
])->except([ 'destroy' ]);
