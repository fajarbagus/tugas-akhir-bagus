<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);

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

Route::get('dashboard', function () {
    return view('dashboard-admin/dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('data', function () {
    return view('dashboard-admin/data', [
        "title" => "Data"
    ]);
});

Route::get('user', function () {
    return view('dashboard-admin/user', [
        "title" => "User"
    ]);
});

Route::get('comment', function () {
    return view('dashboard-admin/comment', [
        "title" => "Comment"
    ]);
});


