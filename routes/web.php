<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('contoh', function () {
    $title = 'dashboard';
    return view('welcome',compact('title'));
});
// =============================== ADMIN ==========================================
Route::get('home',[AdminController::class,'index'])->middleware('auth')->name('home');

// Data
Route::get('data', [HpController::class,'show'])->middleware(['auth','admin'])->name('data');
Route::PUT('data/store', [HpController::class, 'store']);
Route::get('createdata', [HpController::class, 'create']);
Route::get('delete/{id}', [HpController::class, 'remove'])->name('remove');


// User
Route::get('user', [UserController::class,'show'])->middleware(['auth','admin'])->name('user');
Route::get('createuser', [UserController::class, 'create'])
                ->name('createuser');
Route::post('createuser', [UserController::class, 'store']);
Route::get('delete-user/{id_user}', [UserController::class, 'delete'])->middleware(['auth','admin'])->name('remove');

// Comment
Route::get('comment', [CommentController::class,'show'])->middleware(['auth','admin'])->name('comment');

// =============================== AUTH ===========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
