<?php

use App\Http\Controllers\PictureController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PictureController::class, 'index'])->name('pic.home');
Route::get('/add-photo', [PictureController::class, 'add_photo'])->name('pic.add');
Route::post('/process-photo', [PictureController::class, 'upload_photo'])->name('pro-photo');
Route::get('/view-all', [PictureController::class, 'view_all'])->name('pics.view');
Route::get('/single-pic/{id}', [PictureController::class, 'single_pic'])->name('pic.show');
Route::delete('/delete-photo/{id}', [PictureController::class, 'destroy'])->name('pic.delete');