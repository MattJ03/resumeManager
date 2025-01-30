<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/upload-resume', [ResumeController::class, 'uplaodResume'])->name('upload-resume');
Route::post('/upload-resume', [ResumeController::class, 'uploadResume'])->name('upload-resume');
