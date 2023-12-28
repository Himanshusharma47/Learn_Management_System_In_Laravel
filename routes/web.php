<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view( '/dash', 'superAdmin.dashboard');
Route::view( '/user', 'superAdmin.users');
Route::view( '/report', 'superAdmin.reports');
Route::view( '/course', 'superAdmin.courses');
Route::view( '/profile', 'superAdmin.admin-profile');
Route::view( '/communication', 'superAdmin.communication');
Route::view( '/course', 'superAdmin.courses');
Route::view( '/student', 'superAdmin.students');
Route::view( '/teacher', 'superAdmin.teachers');


