<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\{HomeController};
use App\Http\Controllers\Backend\{UserController, RoleController, PermissionController, PostController, IndexController, AboutController};

/* FRONTEND SITES */
Route::get('/', function () {
    return view('layouts.frontend');
});
/* END FRONTEND SITES */

Auth::routes();

/* BACKEND SITES */
Route::prefix('backend')->middleware('auth')->group(function () {
    Route::resource('/', IndexController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('abouts', AboutController::class);
});