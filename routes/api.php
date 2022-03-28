<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('v1/user-files', Api\V1\UserFilesController::class)->middleware('api');