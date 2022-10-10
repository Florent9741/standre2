<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\horairesController;
use App\Http\Controllers\UserController;
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
 Route::get('/', [FilmsController::class, 'index'])->name('welcome');




Route::get('register', [Authcontroller::class, 'register'])->name('register');

Route::post('register', [Authcontroller::class, 'register_action'])->name('register.action');

Route::get('login', [Authcontroller::class, 'login'])->name('login');

Route::post('login', [Authcontroller::class, 'login_action'])->name('login.action');

Route::get('signout', [Authcontroller::class, 'logout'])->name('signout');

Route::get('signout', [Authcontroller::class, 'logout'])->name('signout');

//-----------------------------------------------------------------------------------------

Route::middleware(['Admin'])->group(function () {

    Route::get('/user', [UserController::class, 'getall'])->name('user')->middleware('Admin');
    Route::get('/backend', [FilmsController::class, 'crud'])->name('backend');

});

//----------------------------------------------------------------------------------------------

Route::post('/update/{id}', [FilmsController::class, 'updatememo'])->name('updatememo');

Route::delete('/delete/{id}', [FilmsController::class, 'memodelete'])->whereNumber('id')->name('memodelete'); 

Route::get('/crudee', [FilmsController::class, 'crudee'])->name('crudee');

Route::post('/Film/ajouter', [FilmsController::class, 'create'])->name('ajouter');

Route::post('/Film/update/{id}', [FilmsController::class, 'update'])->whereNumber('id')->name('update');

Route::delete('/Film/delete/{id}', [FilmsController::class, 'delete'])->whereNumber('id')->name('delete');

Route::get('/film/{id}', [FilmsController::class, 'show'])->whereNumber('id')->name('show');
Route::get('/showmemos/{id}', [UserController::class, 'showmemos'])->name('showmemos'); 
Route::post('/store/{id}',[FilmsController::class, 'creatememo'])->name('store');

Route::get('/search', [FilmsController::class, 'search'])->name('search');

Route::get('/notFound', function () {
    return view('notFound')->name('notFound');
});

//----------------------------------------------------------------------------------------------//

Route::middleware(['Admin'])->group(function () {

    Route::get('/index', [horairesController::class, 'index'])->name('index');
    Route::get('/show/{id}', [horairesController::class, 'show'])->name('horaires.show');
    Route::get('/edit/{id}', [horairesController::class, 'edit'])->name('horaires.edit');
        Route::get('/showdelete/{id}', [UserController::class, 'showdel']);
        Route::delete('/user/{id}', [UserController::class, 'delete']);
        Route::get('/restore', [UserController::class, 'showrestore']);
        Route::get('/restore/{id}', [UserController::class, 'restore'])->name('user.restore');   

    Route::post('/update/{id}', [FilmsController::class, 'updatememo'])->name('updatememo');
    Route::delete('/delete/{id}', [FilmsController::class, 'memodelete'])->whereNumber('id')->name('memodelete');    

});

Route::middleware(['auth'])->group(function () {

Route::post('/update/{id}', [FilmsController::class, 'updatememo'])->name('updatememo');
Route::delete('/delete/{id}', [FilmsController::class, 'memodelete'])->whereNumber('id')->name('memodelete');    
});