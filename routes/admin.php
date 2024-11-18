<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EstadoController;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/estado',EstadoController::class);