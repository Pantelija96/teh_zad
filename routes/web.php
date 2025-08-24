<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('home');
});

Route::post('/uploadcsv',[UploadController::class, 'upload'])->name('uploadcsv');
