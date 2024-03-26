<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResources([
    'users' => UserController::class,
    'news' => NewsController::class,
]);