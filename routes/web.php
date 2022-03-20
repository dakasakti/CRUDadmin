<?php

use App\Models\user;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Customer;
use GuzzleHttp\Middleware;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\CustomerController;

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

// Route::get('/mdlcustom', function () {
//     return view('customer.modal');
// });

// Route::resource('/customer', CustomerController::class);

Route::get('/', function () {
    return view('beranda');
});

route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/login',[LoginController::class,'authentication'])->name('auth');

route::post('/logout',[LoginController::class,'logout'])->name('logout');
route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');
route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/customer', [CustomerController::class, 'index']);
Route::post('store-company', [CustomerController::class, 'store']);
Route::post('edit-company', [CustomerController::class, 'edit']);
Route::post('delete-company', [CustomerController::class, 'destroy']);