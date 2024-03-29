<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes([
    'register' => false, //ユーザ登録画面の無効
    'reset' => false, //パスワードリセットの無効
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::get('/detail/{id}', [App\Http\Controllers\ItemController::class, 'detail']);
    Route::get('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']);
    Route::post('/delete', [App\Http\Controllers\ItemController::class, 'delete']);
});
