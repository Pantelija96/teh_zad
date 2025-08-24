<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index']);

Route::post('/uploadcsv',[UploadController::class, 'upload'])->name('uploadcsv');
