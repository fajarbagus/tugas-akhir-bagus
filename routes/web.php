<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HpController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


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

Route::get('/', [PostController::class, 'index']);
	 
Route::get('/dashboard', function () {
    return view('index');
});
 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('asus', function () {
    return view('dashboard-user/asus', [
        "title" => "Asus"
    ]
);
});

Route::get('samsung', function () {
    return view('dashboard-user/samsung', [
        "title" => "Samsung"
    ]);
});

Route::get('oppo', function () {
    return view('dashboard-user/oppo', [
        "title" => "Oppo"
    ]);
});

Route::get('vivo', function () {
    return view('dashboard-user/vivo', [
        "title" => "Vivo"
    ]);
});

Route::get('sony', function () {
    return view('dashboard-user/sony', [
        "title" => "Sony"
    ]);
});

Route::get('huawei', function () {
    return view('dashboard-user/huawei', [
        "title" => "Huawei"
    ]);
});

Route::get('signup', function () {
    return view('login-admin/index', [
        
    ]);
});

// =================================== Admin =====================================


Route::get('dashboard', [DashboardController::class, 'dashboard']);
Route::get('user', [UserController::class, 'show'])->name('useradd');
Route::get('createuser', [UserController::class, 'create']);
Route::PUT('user/store', [UserController::class, 'store']);
Route::get('data', [HpController::class, 'show'])->name('contoh');
Route::PUT('data/store', [HpController::class, 'store']);
Route::get('createdata', [HpController::class, 'create']);
Route::get('delete/{id}', [HpController::class, 'remove'])->name('remove');
Route::get('comment', [CommentController::class, 'show']);



