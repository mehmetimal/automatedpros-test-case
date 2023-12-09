<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;

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



/*
|--------------------------------------------------------------------------
| QUESTİON 1 Routes  
|--------------------------------------------------------------------------
|
| A Form for Register and display Users in datatable By Using Ajax 
*/

Route::view('/','question1.register')->name('register');
Route::post('/register-user',[AutController::class,'register']);
Route::get('/get-users',[UserController::class,'index']);


/*
|--------------------------------------------------------------------------
| QUESTİON 2 Routes  
|--------------------------------------------------------------------------
|
| A Form for Upload Image And Preview Using Ajax
*/

Route::get('/image-upload',[ImageController::class,'index'])->name('imageUpload.index');
Route::post('/upload-image',[ImageController::class,'uploadImage'])->name('uploadImage');
