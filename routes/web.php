<?php

use App\Http\Controllers\ConsultController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EncounterController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\LaboratoryTypeController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\MedicationTypeController;
use App\Http\Controllers\NursingNoteController;
use App\Http\Controllers\PhysicianNoteController;
use App\Http\Controllers\ProviderController;
use App\Models\LaboratoryType;
use App\Models\Medication;
use App\Models\Encounter;
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

Route::get('/alvaro', function () {
    $a = Encounter::where('id','=',1)->first();
    $a->reason = 'nada';
    return $a;
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
    
    // Consult
    Route::resource('consult', 'ConsultController');
    
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
    Route::get('/medications', [MedicationController::class, 'index'])->name("medications.index");
    Route::get('/medications/{id}', [MedicationController::class, 'show'])->name("medications.show");
    Route::put('/medications/{id}', [MedicationController::class, 'update'])->name("medications.update");
    Route::post('/medications', [MedicationController::class, 'store'])->name("medications.store");
    Route::delete('/medications/{id}', [MedicationController::class, 'destroy'])->name("medications.destroy");

    //Physician note
    Route::get('/physician_notes', [PhysicianNoteController::class, 'index'])->name("physician_notes.index");
    Route::get('/physician_notes/{id}', [PhysicianNoteController::class, 'show'])->name("physician_notes.show");
    Route::put('/physician_notes/{id}', [PhysicianNoteController::class, 'update'])->name("physician_notes.update");
    Route::post('/physician_notes', [PhysicianNoteController::class, 'store'])->name("physician_notes.store");
    Route::delete('/physician_notes/{id}', [PhysicianNoteController::class, 'destroy'])->name("physician_notes.destroy");

    //Nursing Note
    Route::get('/nursing_notes', [NursingNoteController::class, 'index'])->name("nursing_notes.index");
    Route::get('/nursing_notes/{id}', [NursingNoteController::class, 'show'])->name("nursing_notes.show");
    Route::put('/nursing_notes/{id}', [NursingNoteController::class, 'update'])->name("nursing_notes.update");
    Route::post('/nursing_notes', [NursingNoteController::class, 'store'])->name("nursing_notes.store");
    Route::delete('/nursing_notes/{id}', [NursingNoteController::class, 'destroy'])->name("nursing_notes.destroy");

    //Lab results
    Route::get('/laboratories', [LaboratoryController::class, 'index'])->name("laboratories.index");
    Route::get('/laboratories/{id}', [LaboratoryController::class, 'show'])->name("laboratories.show");
    Route::put('/laboratories/{id}', [LaboratoryController::class, 'update'])->name("laboratories.update");
    Route::post('/laboratories', [LaboratoryController::class, 'store'])->name("laboratories.store");
    Route::delete('/laboratories/{id}', [LaboratoryController::class, 'destroy'])->name("laboratories.destroy");

    
    // Providers
    Route::get('/providers/myself', [ProviderController::class, 'me'])->name("provider.me");


    // Medication Type
    Route::get('/medication_types', [MedicationTypeController::class, 'index'])->name("medication_types.index");
    Route::get('/medication_types/{id}', [MedicationTypeController::class, 'show'])->name("medication_types.show");
    Route::put('/medication_types/{id}', [MedicationTypeController::class, 'update'])->name("medication_types.update");
    Route::post('/medication_types', [MedicationTypeController::class, 'store'])->name("medication_types.store");
    Route::delete('/medication_types/{id}', [MedicationTypeController::class, 'destroy'])->name("medication_types.destroy");

    //  Lab Types
    Route::get('/laboratory_types', [LaboratoryTypeController::class, 'index'])->name("laboratory_types.index");
    Route::get('/laboratory_types/{id}', [LaboratoryTypeController::class, 'show'])->name("laboratory_types.show");
    Route::put('/laboratory_types/{id}', [LaboratoryTypeController::class, 'update'])->name("laboratory_types.update");
    Route::post('/laboratory_types', [LaboratoryTypeController::class, 'store'])->name("laboratory_types.store");
    Route::delete('/laboratory_types/{id}', [LaboratoryTypeController::class, 'destroy'])->name("laboratory_types.destroy");



});