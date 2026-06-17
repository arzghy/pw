<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BiodataController::class, 'index'])->name('biodata.index');
Route::get('/biodata/pdf', [BiodataController::class, 'generatePDF'])->name('biodata.pdf');
Route::get('/biodata/excel', [BiodataController::class, 'generateExcel'])->name('biodata.excel');