<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController; // Mettez à jour l'importation

Route::get('/users', [UserController::class, 'index']);
