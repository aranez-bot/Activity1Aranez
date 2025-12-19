<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::middleware('auth:sanctum')->get('/user', function  (Request $request): mixed {
    return $request->user();
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/test', function () {
    return response()->json(['status' => 'API working']);
});
