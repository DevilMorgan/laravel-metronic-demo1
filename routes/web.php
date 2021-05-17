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


Route::delete('ap-managements/destroy', 'ApManagementController@massDestroy')->name('ap-managements.massDestroy');
Route::post('ap-managements/parse-csv-import', 'ApManagementController@parseCsvImport')->name('ap-managements.parseCsvImport');
Route::post('ap-managements/process-csv-import', 'ApManagementController@processCsvImport')->name('ap-managements.processCsvImport');
Route::resource('ap-managements', 'ApManagementController');
Route::get('ap-managements/cmd/{id}', 'ApManagementController@command')->name('cmd');
