<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use App\Models\User;
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

Route::get('/ping', function(){
    return response()->json('pong');
});

Route::get('/users', function(){
    $users = User::all();
    $tasks = Task::all();

    return response()->json([$users, $tasks]);
});

Route::get('/task', [TaskController::class, 'index']);
Route::post('/task/store', [TaskController::class, 'store']);
