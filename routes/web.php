<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
});

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin-dashboard');
Route::get('/admin/campus', 'App\Http\Controllers\AdminController@campus')->name('admin-campus');
Route::get('/admin/student', 'App\Http\Controllers\AdminController@student')->name('admin-student');
Route::get('/admin/organization', 'App\Http\Controllers\AdminController@organization')->name('admin-organization');
Route::get('/admin/party-list', 'App\Http\Controllers\AdminController@partylist')->name('admin-partylist');
Route::get('/admin/position', 'App\Http\Controllers\AdminController@position')->name('admin-position');
Route::get('/admin/candidate', 'App\Http\Controllers\AdminController@candidate')->name('admin-candidate');
//ADMINISTRATOR

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
