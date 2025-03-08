<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/refresh', [AuthController::class, 'refresh']);


        // Project Routes
        Route::get('/projects', [ProjectController::class, 'index']);
        Route::post('/projects', [ProjectController::class, 'store']);
        Route::put('/projects/{project}', [ProjectController::class, 'update']);
        Route::delete('/projects/{project}', [ProjectController::class, 'destroy']);
    
        // Task Routes
        Route::get('/projects/{projectId}/tasks', [TaskController::class, 'index']);
        Route::post('/projects/{projectId}/tasks', [TaskController::class, 'store']);
        Route::put('/tasks/{task}', [TaskController::class, 'update']);
        Route::put('/tasks/{id}/status', [TaskController::class, 'updateStatus']);
        Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);

        Route::post('/tasks/{id}/remarks', [TaskController::class, 'addRemark']);
        Route::get('/projects/{id}/report', [TaskController::class, 'projectReport']);

});
