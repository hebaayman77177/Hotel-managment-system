<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('adminLt.dashborad');
//     // return view('welcome');
// });

Route::view('/', 'welcome');
Auth::routes();

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/register/client', [RegisterController::class, 'createClient']);
Route::get('/register/client', [RegisterController::class, 'showClientRegisterForm']);
Route::get('/login/client', [LoginController::class, 'showClientLoginForm']);
Route::post('/login/client', [LoginController::class, 'clientLogin']);
Route::post('/register/employee', [RegisterController::class, 'createEmployee']);
Route::get('/register/employee', [RegisterController::class, 'showEmployeeRegisterForm']);
Route::get('/login/employee', [LoginController::class, 'showEmployeeLoginForm']);
Route::post('/login/employee', [LoginController::class, 'employeeLogin']);


Route::group(['middleware' => 'auth:employee'], function () {
    Route::view('/employee', 'employee');
});
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
Route::group(['middleware' => 'auth:client'], function () {
    Route::view('/client', 'client');
});

Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');

Route::get('reservations/rooms/{roomId}/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('reservations/payment/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('reservations/payment/store/', [PaymentController::class, 'store'])->name('payments.store');
Route::get('clients/{client}/reservations/', [ReservationController::class, 'getReservations'])->name('clientreservations.index');

Route::get('logout', [LoginController::class,'logout'])->name('logout');

// Route::get('/users', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
