<?php

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
use App\Http\Controllers\PostController;
Route::get('posts/export', [PostController::class, 'export'])->name('posts.export');
Route::post('posts/import', [PostController::class, 'import'])->name('posts.import');

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts', PostController::class);

