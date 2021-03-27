<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\manager\recepmanagecontroller;

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
Route::get('/', function () {
    return view('/welcome');
});

Auth::routes();
// Route::get('/managerecep',  [recepmanagecontroller::class, 'index'])->name('managerecep');
Route::group(['middleware' => ['isEmployee']],function(){
    Route::get('/managerecep',  [recepmanagecontroller::class, 'index'])->name('managerecep');
});
Route::get('/managerecep/create', [recepmanagecontroller::class, 'create'])->name('managerecep.create');
Route::get('/managerecep/{id}', [recepmanagecontroller::class, 'show'])->name('managerecep.show');  
Route::post('/managerecep',[recepmanagecontroller::class,'store'])->name('managerecep.store');
Route::delete('/managerecep/{id}', [recepmanagecontroller::class, 'destroy'])->name('managerecep.destroy');  
Route::get('/managerecep/{id}/edit', [recepmanagecontroller::class, 'edit'])->name('managerecep.edit');  
Route::put('managerecep/{id}',[recepmanagecontroller::class,'update'])->name('managerecep.update');


// if(Auth::employee())
// Route::get('/managerecep',  [recepmanagecontroller::class, 'index'])->name('managerecep');
// @else
// <p> please log in as manager </p>
// @endif

//Route::get('/manageroom',  [roommanagecontroller::class, 'index'])->name('manageroom');
//Route::get('/managefloor',  [floormanagecontroller::class, 'index'])->name('managefloor');

// Route::get('/managefloor', function () {
//     return view('manage.floormanager.index');
// })->name('managefloor');


// Route::get('/manageroom', function () {
//     return view('manage.roommanager.index');
    
// })->name('manageroom');


Route::get('rooms', [RoomController::class, 'index'])->name('rooms.index');



// Route::get('/users', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
