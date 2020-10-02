<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
//     // Authentication...

//     Route::get('/', [AuthenticatedSessionController::class, 'create'])
//         ->middleware(['guest'])
//         ->name('login');
    
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum','verified'])->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware(['auth:sanctum','verified'])->get('/user', function (Request $request) {
    return Inertia\Inertia::render('Welcome');
})->name('welcome');

Route::middleware(['auth:sanctum','verified'])->get('/medical-record/{medicalRecord_id}', function (Request $request) {
    return Inertia\Inertia::render('MedicalRecord');
})->name('medical-record');
