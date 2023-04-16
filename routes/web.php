<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/', [InventoryController::class,'index' ]);

Route::post('/create',[InventoryController::class,'store'])->name('products.create'); 

Route::delete('/product/{id}',[InventoryController::class,'delete'])->name('products.delete');

Route::get('/edit/{id}',[InventoryController::class,'updateView'])->name('products.edit.view');

Route::put('/update{id}',[InventoryController::class,'update'])->name('products.update');

Route::view('/login','login');

Route::post('/login', [LoginController::class,'authenticate'])->name('login');

// Route::middleware(['auth'])->group(function () {
//     // ...
// });

// Route::middleware(['guest'])->group(function () {
//     // ...
// });
