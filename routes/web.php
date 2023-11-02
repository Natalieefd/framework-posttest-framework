<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\staffController;
use App\Models\menu;
use App\Models\staff;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
return view('auth.regist');
})->name('register');

Route::get('/login', function () {
return view('auth.login');
})->name('login');

Route::post('/login/action', [
AuthController::class, 'loginAction'
])->name('login.action');

Route::post('/register/action', [
AuthController::class, 'registerAction'
])->name('register.action');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', [
        'menu' => menu::all(),
        'staff' => staff::all(),
    ]);
})->name('admin.dashboard')->middleware('auth');

Route::controller(staffController::class)->group(function(){
    Route::get('/admin/dashboard/create', 'create')->name('admin.create');
    Route::get('/admin/dashboard/create/action', 'store')->name('admin.store');
    Route::get('/admin/dashboard/edit/{id}', 'edit')->name('admin.edit');
    Route::get('/admin/dashboard/edit/{id}/action', 'update')->name('admin.update');
    Route::post('/admin/dashboard/delete/{id}/action', 'delete')->name('admin.delete');
});

Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');