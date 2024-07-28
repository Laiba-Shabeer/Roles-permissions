<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth_login'])->name('login');
