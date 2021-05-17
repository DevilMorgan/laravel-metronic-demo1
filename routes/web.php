<?php

use Illuminate\Support\Facades\Route;
use Redbastie\Crudify\Helpers\AutoRoute;

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







// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/jquerymask', 'PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');



Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Crm Status
Route::delete('crm-statuses/destroy', 'CrmStatusController@massDestroy')->name('crm-statuses.massDestroy');
Route::post('crm-statuses/parse-csv-import', 'CrmStatusController@parseCsvImport')->name('crm-statuses.parseCsvImport');
Route::post('crm-statuses/process-csv-import', 'CrmStatusController@processCsvImport')->name('crm-statuses.processCsvImport');
Route::resource('crm-statuses', 'CrmStatusController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
AutoRoute::controller('vehicles', \App\Http\Controllers\VehicleController::class);

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
