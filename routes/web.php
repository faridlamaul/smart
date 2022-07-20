<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/viewPDF/{id}', [HomeController::class, 'viewPDF']);
Route::post('/search', [HomeController::class, 'search']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/dashboard/viewPDF/{id}', [DashboardController::class, 'viewPDF']);
    Route::get('/dashboard/form', [DashboardController::class, 'form']);
    Route::get('/dashboard/data', [DashboardController::class, 'data']);
    Route::post('/dashboard/data/add', [DashboardController::class, 'addData']);
    Route::put('/dashboard/data/edit/{id}', [DashboardController::class, 'editData']);
    Route::delete('/dashboard/data/delete/{id}', [DashboardController::class, 'deleteData']);
    Route::get('/dashboard/rekap', [DashboardController::class, 'rekap']);
});

require __DIR__ . '/auth.php';