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

Route::get('/', function () {
    return redirect('/login');
});
// Route::redirect('login', 'login');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('sales/proceed', 'SalesController@proceed')->name('sales.proceed');

Route::resource('users', 'UsersController');
Route::resource('sales', 'SalesController');
Route::resource('finances', 'FinanceController');
Route::resource('processings', 'ProcessingController');
Route::resource('retentions', 'ProcessingController');

});
