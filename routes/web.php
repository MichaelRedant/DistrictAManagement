<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\LedenStratenController;
use App\Http\Controllers\Backend\UserController;
use App\Models\LedenStraten;

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

Route::get('/', function () {
    return view('layouts.master');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//////////////////////////////////////////////////////////////////////////////////////
//Admin
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

//User Management groep
Route::prefix('users')->group(function(){
Route::get('/view',[UserController::class,'UserView'])->name('user.view');
Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
Route::post('/store',[UserController::class,'UserStore'])->name('user.store');
Route::get('/edit/{id}',[UserController::class,'UserEdit'])->name('user.edit');
Route::post('/update/{id}',[UserController::class,'UserUpdate'])->name('user.update');
Route::get('/delete/{id}',[UserController::class,'UserDelete'])->name('user.delete');
});

//User Profile & Paswoord groep
Route::prefix('profile')->group(function(){
    Route::get('/view',[ProfileController::class,'ProfileView'])->name('profile.view');
    Route::get('/edit/{id}',[ProfileController::class,'ProfileEdit'])->name('profile.edit');
    Route::post('/store',[ProfileController::class,'ProfileStore'])->name('profile.store');
    Route::get('/password/view',[ProfileController::class,'PasswordView'])->name('password.view');
    Route::post('/password/update',[ProfileController::class,'PasswordUpdate'])->name('password.update');
});

//Setup management - Straten 
Route::prefix('setup')->group(function(){
    Route::get('/leden/straten/view',[LedenStratenController::class,'ViewStreet'])->name('leden.straten.view');
    Route::get('/leden/straten/add',[LedenStratenController::class,'AddStreet'])->name('leden.straten.add');
    Route::post('/leden/straten/store',[LedenStratenController::class,'StoreStreet'])->name('leden.straten.store');
    Route::get('/leden/straten/edit/{id}',[LedenStratenController::class,'EditStreet'])->name('leden.straten.edit');
    Route::post('/leden/straten/update/{id}',[LedenStratenController::class,'UpdateStreet'])->name('leden.straten.update');
    Route::get('/leden/straten/delete/{id}',[LedenStratenController::class,'DeleteStreet'])->name('leden.straten.delete');
});