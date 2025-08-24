<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ExportController;

Route::get('/', [FrontendController::class, 'index']);
Route::post('/export-pdf', [ExportController::class, 'exportPdf'])->name('export.pdf');
Route::post('/upload-csv',[UploadController::class, 'upload'])->name('upload.csv');
