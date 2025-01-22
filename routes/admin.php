<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\EstadoController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/estado',EstadoController::class);

Route::resource('/roles', RoleController::class);

Route::resource('/permissions', PermissionController::class);

Route::resource('/users', UserController::class)
    ->except('show','create','store');