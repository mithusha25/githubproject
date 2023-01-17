<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Route::resource('students', 'StudentController');
Route::get('create', [StudentController::class, 'create'])->name('create');
Route::get('index', [StudentController::class, 'index'])->name('index');
Route::get('store', [StudentController::class, 'store'])->name('store');
Route::get('update', [StudentController::class, 'update'])->name('update');
Route::get('destroy', [StudentController::class, 'destroy'])->name('destroy');
// Route::get('/create', 'StudentController@create')->name('/create');
// Route::get('/index', 'StudentController@index')->name('/index');
// Route::get('/store', 'StudentController@store')->name('/store');
// Route::get('/students', 'StudentController@index')->name('/');


Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('signout', [HomeController::class, 'signOut'])->name('signout');