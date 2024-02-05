<?php
use App\Http\Controllers\API\V1\InvoiceController;
use App\Http\Controllers\API\V1\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// routes/api.php


//Route::apiResource('customers', CustomerController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1','namespace' => 'App\Http\Controllers\API\V1'], function (){
Route::apiResource('customers',CustomerController::class);
Route::apiResource('invoices',InvoiceController::class);
});