<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', [RegistrationController::class, 'registration']);
Route::post('/insert', [RegistrationController::class, 'insertRegistration']);
