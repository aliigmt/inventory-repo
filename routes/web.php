<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('createuser', [UserController::class, 'Index']);
Route::Post('createuser', [UserController::class, 'Store'])->name('createuser');
Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom'); 
Route::get('dashboard', [UserController::class, 'dashboard']); 
Route::get('signout', [UserController::class, 'signOut'])->name('signout');



