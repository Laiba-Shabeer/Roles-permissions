<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



// Route::get('/', function () {
//     return view('welcome');
// });





// Route::group(['middleware'=> 'useradmin' ], function(){
//     Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);
// }

// );
Route::middleware(['useradmin'])->group(function () {
    Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);

});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth_login'])->name('login');

