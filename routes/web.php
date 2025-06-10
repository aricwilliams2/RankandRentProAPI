<?php

use Illuminate\Support\Facades\Route;
use App\Services\CustomerService;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/customers', fn() => response()->json(CustomerService::all()));
// Route::get('/customers/{id}', fn($id) => response()->json(CustomerService::find($id)));
// Route::post('/customers', fn(Request $request) => response()->json(CustomerService::create($request->all())));
// Route::put('/customers/{id}', fn(Request $request, $id) => response()->json(CustomerService::update($id, $request->all())));
// Route::delete('/customers/{id}', fn($id) => response()->json(CustomerService::delete($id)));

// Route::get('/test', fn() => 'API works!');