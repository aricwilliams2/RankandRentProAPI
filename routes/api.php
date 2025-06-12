<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\CustomerService;
use App\Http\Controllers\LeadController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/customers', fn() => response()->json(CustomerService::all()));
Route::get('/customers/{id}', fn($id) => response()->json(CustomerService::find($id)));
Route::post('/customers', fn(Request $request) => response()->json(CustomerService::create($request->all())));
Route::put('/customers/{id}', fn(Request $request, $id) => response()->json(CustomerService::update($id, $request->all())));
Route::delete('/customers/{id}', fn($id) => response()->json(CustomerService::delete($id)));

Route::get('/test', fn() => 'API works!');


Route::get('/leads', [LeadController::class, 'index']);
Route::get('/leads/{id}', [LeadController::class, 'show']);
Route::post('/leads', [LeadController::class, 'store']);
Route::put('/leads/{id}', [LeadController::class, 'update']);
Route::delete('/leads/{id}', [LeadController::class, 'destroy']);