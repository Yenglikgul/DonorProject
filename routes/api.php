<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\ConnectionController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MapController;

Route::post('donor', [DonorController::class, 'create']);
Route::delete('donor/{id}', [DonorController::class, 'delete']);
Route::get('donor', [DonorController::class, 'show']);
Route::put('donor/{id}', [DonorController::class, 'update']);

Route::post('createHospital', [HospitalController::class, 'create']);
Route::delete('deleteHospital/{id}', [HospitalController::class, 'delete']);
Route::get('showHospital', [HospitalController::class, 'show']);
Route::put('updateHospital/{id}', [HospitalController::class, 'update']);

Route::post('createBloodType', [BloodTypeController::class, 'create']);
Route::delete('deleteBloodType/{id}', [BloodTypeController::class, 'delete']);
Route::get('showBloodType', [BloodTypeController::class, 'show']);
Route::put('updateBloodType/{id}', [BloodTypeController::class, 'update']);

Route::post('createVisit', [VisitController::class, 'create']);
Route::delete('deleteVisit/{id}', [VisitController::class, 'delete']);
Route::get('showVisit', [VisitController::class, 'show']);
Route::put('updateVisit/{id}', [VisitController::class, 'update']);

Route::post('createStorage', [StorageController::class, 'create']);
Route::delete('deleteStorage/{id}', [StorageController::class, 'delete']);
Route::get('showStorage', [StorageController::class, 'show']);
Route::put('updateStorage/{id}', [StorageController::class, 'update']);

Route::post('createConnection', [ConnectionController::class, 'create']);
Route::delete('deleteConnection/{id}', [ConnectionController::class, 'delete']);
Route::get('showConnection', [ConnectionController::class, 'show']);
Route::put('updateConnection/{id}', [ConnectionController::class, 'update']);

Route::post('createDonation', [DonationController::class, 'create']);
Route::delete('deleteDonation/{id}', [DonationController::class, 'delete']);
Route::get('showDonation', [DonationController::class, 'show']);
Route::put('updateDonation/{id}', [DonationController::class, 'update']);

Route::post('createMap', [MapController::class, 'create']);
Route::delete('deleteMap/{id}', [MapController::class, 'delete']);
Route::get('showMap', [MapController::class, 'show']);
Route::put('updateMap/{id}', [MapController::class, 'update']);
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
