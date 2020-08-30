<?php

use App\Http\Controllers\UserController;
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

Route::redirect('/','/home');

Auth::routes();



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'DashboardController@index')->name('home');
    /* USERS */
    Route::get('users/', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');
    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:roles.destroy');

    /* PRODUCTS */
    Route::resource('products', 'ProductController');

    /* ROLES */
    Route::get('roles/', 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');
    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');
    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');
    Route::post('roles/', 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');
});
