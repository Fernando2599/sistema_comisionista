<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\EstadoController;
use App\Http\Controllers\Admin\RoleController;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/estado',EstadoController::class);

Route::resource('roles', RoleController::class);