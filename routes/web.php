<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ReceptionistController;
use Yajra\DataTables\Html\Builder;


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


// ************************* Receptionist Routes *************************** //
Route::get('/receptionist', 'App\Http\Controllers\ReceptionistController@greeting')->name('receptionist.greeting');

Route::get('/receptionist/index', 'App\Http\Controllers\ReceptionistController@index')->name('receptionist.index');

Route::get('/receptionist/update', 'App\Http\Controllers\ReceptionistController@update')->name('receptionist.update');

Route::get('/receptionist/show', 'App\Http\Controllers\ReceptionistController@show')->name('receptionist.show');

Route::get('/receptionist/reservedClients', 'App\Http\Controllers\ReceptionistController@reservedClients')->name('receptionist.reservedClients');

Route::get('clients/{id}/approve', 'App\Http\Controllers\ReceptionistController@approveClient')->name('client.approve');


// ************************* Admin Routes *************************** //
Route::get('/admin/index', 'App\Http\Controllers\AdminController@index')->name('admin.index');

              // ******* Manage Manger Routes *************** //
Route::get('/admin/manageManager/index', 'App\Http\Controllers\MangeManager@index')->name('manageManager.index');






















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/users', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
