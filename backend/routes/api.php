<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminDashboardController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisterController::class, 'register']);

Route::apiResource('diplomas', DiplomaController::class);



Route::apiResource('fields', FieldController::class);
Route::get('/diplomas', [DiplomaController::class, 'index']);
Route::get('/fields', [FieldController::class, 'index']);
Route::get('/diplomas/{diplomaId}/fields', [FieldController::class, 'getFieldsByDiploma']);
Route::get('/available-diplomas', [FieldController::class, 'getAvailableDiplomas']);
Route::get('/diplomas-with-fields', [DiplomaController::class, 'getDiplomasWithFields']);



  Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);
        Route::get('/admin/users', [AdminDashboardController::class, 'getUsers']);
        Route::get('/admin/users/{userId}/applications', [AdminDashboardController::class, 'getUserApplications']);
        Route::put('/admin/users/{userId}/role', [AdminDashboardController::class, 'updateUserRole']);
        Route::delete('/admin/users/{userId}', [AdminDashboardController::class, 'deleteUser']);
        Route::put('/admin/applications/{applicationId}/status', [AdminDashboardController::class, 'updateApplicationStatus']);


Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [LoginController::class, 'logout']);

    Route::apiResource('diplomas', DiplomaController::class)->except(['index']);
        Route::apiResource('fields', FieldController::class)->except(['index']);

//  Route::middleware('admin')->group(function () {
//         Route::apiResource('diplomas', DiplomaController::class)->except(['index']);
//         Route::apiResource('fields', FieldController::class)->except(['index']);
//     });

     Route::get('/admin/dashboard', function() {
            return response()->json(['message' => 'Admin dashboard data']);
        });