<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\EncounterController;
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
    return redirect('login');
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

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    //Patient 
    Route::get('/patients', [PatientController::class, 'index'])->name("patients.index");
    Route::get('/patients/{id}', [PatientController::class, 'show'])->name("patients.show");
    Route::put('/patients/{id}', [PatientController::class, 'update'])->name("patients.update");
    Route::post('/patients', [PatientController::class, 'store'])->name("patients.store");
    Route::delete('/patients/{id}', [PatientController::class, 'destroy'])->name("patients.destroy");

    // Encounter
    Route::get('/encounters', [EncounterController::class, 'index'])->name("encounters.index");
    Route::get('/encounters/{id}', [EncounterController::class, 'show'])->name("encounters.show");
    Route::put('/encounters/{id}', [EncounterController::class, 'update'])->name("encounters.update");
    Route::post('/encounters', [EncounterController::class, 'store'])->name("encounters.store");
    Route::delete('/encounters/{id}', [EncounterController::class, 'destroy'])->name("encounters.destroy");

    //Medication
    

    //Physician note

    //Nursing Note

    //Lab results
    

});