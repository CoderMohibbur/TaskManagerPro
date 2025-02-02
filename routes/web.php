<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubTaskController;
use App\Http\Controllers\TaskCommentController;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// 📌 Project Routes
Route::resource('projects', ProjectController::class);

// 📌 Task Routes
Route::resource('tasks', TaskController::class);

// 📌 SubTask Routes
Route::resource('sub_tasks', SubTaskController::class);

// 📌 Task Comment Routes
Route::resource('task_comments', TaskCommentController::class);

// 📌 Time Log Routes
Route::resource('time_logs', TimeLogController::class);

// 📌 Notifications Route (Only Index to List Notifications)
Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
