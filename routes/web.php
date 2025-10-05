<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('clientes', ClienteController::class);