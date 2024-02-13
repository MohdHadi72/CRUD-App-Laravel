<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;

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


Route::controller(UserController::class)->group(function () {

  Route::get('/', "UserData")->name('home');

  Route::get('/data/{id}', "ViewData")->name('View.data');     

  Route::get('/updatepage/{id}', "UpdatePage")->name('Update.page');

  Route::post('/update/{id}', "UpdateData")->name('Update.Data');

  Route::get('/delete/{id}', "deleteData")->name('delete.data');

  Route::view('userdata', '/add');

  Route::post('/', "AddUser")->name('AddUserName');

});
