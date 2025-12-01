<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\{
    AuthController,
    CompanyController,
    InvoiceController
};

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::post('/logout', [AuthController::class, 'logout']);

    //Company Crud
    Route::post('/company/create', [CompanyController::class, 'create']);
    Route::get('/company/list', [CompanyController::class, 'index']);
    Route::get('/company/show/{id}', [CompanyController::class, 'show']);
    Route::post('/company/update/{id}', [CompanyController::class, 'update']);
    Route::delete('/company/delete/{id}', [CompanyController::class, 'destroy']);

    //iNVOICE CRD
    Route::post('/invoice/create', [InvoiceController::class, 'create']);
    Route::get('/invoice/list', [InvoiceController::class, 'index']);
    Route::get('/invoice/show/{id}', [InvoiceController::class, 'show']);
    Route::delete('/invoice/delete/{id}', [InvoiceController::class, 'destroy']);
});