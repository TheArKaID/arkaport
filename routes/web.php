<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('profile', App\Http\Livewire\Admin\Profile::class)->name('admin.profile');
    
    // Expertise
    Route::get('expertise', App\Http\Livewire\Admin\Expertise\Index::class)->name('admin.expertise.index');
    Route::get('expertise/{id}', App\Http\Livewire\Admin\Expertise\Detail::class)->name('admin.expertise.detail');
    
    Route::get('work-experience', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.work-experience');
    Route::get('education', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.education');
    Route::get('course', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.course');
    Route::get('interest', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.interest');
    Route::get('portfolio', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.portfolio');

});