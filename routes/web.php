<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
Route::middleware('auth')->group(function () {
    Route::prefix('teache')->group(function () {
        Route::put('update', [teacherController::class, 'update'])->name('teache.update');
        Route::get('index', [teacherController::class, 'index'])->name('teache.index');
        Route::get('show', [teacherController::class, 'show'])->name('teache.show');
        Route::put('destroy', [teacherController::class, 'destroy'])->name('teache.destroy');
        Route::get('create', [teacherController::class, 'create'])->name('teache.create');
        Route::post('store', [teacherController::class, 'store'])->name('teache.store');


       
    });
});
Route::middleware('auth')->group(function () {
    Route::prefix('studen')->group(function () {
        Route::put('update', [studentController::class, 'update'])->name('studen.update');
        Route::get('index', [studentController::class, 'index'])->name('studen.index');
        Route::get('show', [studentController::class, 'show'])->name('studen.show');
        Route::put('destroy', [studentController::class, 'destroy'])->name('studen.destroy');


    });
});
