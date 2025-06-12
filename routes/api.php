<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\CustomerService;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\API\LeadStatusController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customers', fn() => response()->json(CustomerService::all()));
Route::get('/customers/{id}', fn($id) => response()->json(CustomerService::find($id)));
Route::post('/customers', fn(Request $request) => response()->json(CustomerService::create($request->all())));
Route::put('/customers/{id}', fn(Request $request, $id) => response()->json(CustomerService::update($id, $request->all())));
Route::delete('/customers/{id}', fn($id) => response()->json(CustomerService::delete($id)));

Route::get('/test', fn() => 'API works!');

// Lead API routes with resource controller
Route::apiResource('leads', LeadController::class);

// Lead status management routes
Route::prefix('leads')->group(function() {
    Route::get('/stats/status', [LeadStatusController::class, 'getStatusCounts']);
    Route::get('/status/{status}', [LeadStatusController::class, 'getLeadsByStatus']);
    Route::put('/{id}/status', [LeadStatusController::class, 'updateStatus']);
});