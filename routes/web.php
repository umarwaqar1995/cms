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

// Route::get('/admin', function () {
//     return "You are Admin";
// })->middleware(['auth']);
    
// Route::group(['middleware' => 'role:admin'], function(){

// });
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');
Route::resource('sales', 'SalesController');
Route::resource('finances', 'FinanceController');
Route::resource('processings', 'ProcessingController');
Route::resource('retentions', 'CustomerRetentionController');

//-----------------------Reports Routes---------------------------//
Route::any('/reports_results', function()
{
    return view('reports.results');
});
// Route::get('reports_filter', function()
// {
//     return view('reports.reports_filter');
// });
Route::get('reports_filter','ReportsController@ReportsFilter')->name('reports_filter');

Route::get('view_all_sales','ReportsController@ViewAllSales')->name('view_all_sales');
Route::any('results','ReportsController@Results')->name('view_results');


