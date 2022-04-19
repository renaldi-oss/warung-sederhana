<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\DashboardFaqController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardJumbotronController;


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

//jika route method post tidak berkerja maka sebelum production dapat mengunakan ini php artisan route:cache

//untuk melihat daftar route yang telah dibuat sendiri/laravel gunakan php artisan route:list

//route frontend halaman utama

Route::get('/',[FrontController::class,'index']);
// Route::get('/', function(){
//     return view('frontend.index');
// });


//route login
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

//route register
Route::get('/register',[registercontroller::class,'index'])->middleware('guest');
Route::post('/register',[registercontroller::class,'store']);

//route dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

//route pada sidebar dashboard mengunakan resource untuk mengatasi semua permasalahan yang sering dihadapi ketika CRUD
Route::resource('/dashboard/menus', DashboardMenuController::class)->middleware('auth');
Route::resource('/dashboard/about', DashboardAboutController::class)->middleware('auth');
Route::resource('/dashboard/jumbotron', DashboardJumbotronController::class)->middleware('auth');
Route::resource('/dashboard/faqs', DashboardFaqController::class)->middleware('auth');


//route FAQ


