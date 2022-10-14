<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return to_route('home');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::post('/task/{task}/check', [TaskController::class, 'check'])->name('tasks.check');

Route::resource('tasks', TaskController::class);

Route::resource('users', UserController::class);

Route::resource('admin', AdminController::class)
    ->middleware(['auth', 'role:admin']);
