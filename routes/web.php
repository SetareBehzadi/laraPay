<?php

use App\Http\Controllers\Admin\UsersController;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[UsersController::class, 'index']);*/

/*Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'admin',
    'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']], function()
{
    Route::get('/dashboard', ['DashboardController', 'index']);
});*/

Route::group(['namespace' => 'Admin','prefix'=>'admin','as'=>'admin.'],function (){
    Route::get('/','DashboardController@index')->name('dashboard.index');
    Route::group(['namespace' => 'User','prefix'=>'users'],function (){
        Route::get('/','UsersController@index')->name('users.index');
        Route::get('/add','UsersController@create')->name('users.add');
        Route::post('/store','UsersController@store')->name('users.store');
        Route::get('accounts','UserAccountController@index')->name('users.accounts.index');
        Route::get('/add-accounts','UserAccountController@create')->name('users.accounts.add');
        Route::post('/store-accounts','UserAccountController@store')->name('users.accounts.store');
        Route::get('/edit-accounts/{id}','UserAccountController@edit')->name('users.accounts.edit');
        Route::post('/edit-accounts/{id}','UserAccountController@update')->name('users.accounts.update');
        Route::post('/remove-accounts/{id}','UserAccountController@delete')->name('users.accounts.delete');
        Route::get('/search','UsersController@search');
    });

});
