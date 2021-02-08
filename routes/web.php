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
    return view('welcome');
});

Route::get('/redirect', fn()=>view('welcome'))->middleware(['checkRole', 'auth']);
//ADMINISTRATOR
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin-dashboard')->middleware('admin');
Route::get('/admin/print', 'App\Http\Controllers\AdminController@print')->name('admin-print')->middleware('admin');
Route::get('/admin/campus', 'App\Http\Controllers\AdminController@campus')->name('admin-campus')->middleware('admin');
Route::get('/admin/student', 'App\Http\Controllers\AdminController@student')->name('admin-student')->middleware('admin');
Route::get('/admin/organization', 'App\Http\Controllers\AdminController@organization')->name('admin-organization')->middleware('admin');
Route::get('/admin/party-list', 'App\Http\Controllers\AdminController@partylist')->name('admin-partylist')->middleware('admin');
Route::get('/admin/position', 'App\Http\Controllers\AdminController@position')->name('admin-position')->middleware('admin');
Route::get('/admin/user', 'App\Http\Controllers\AdminController@user')->name('admin-user')->middleware('admin');
Route::get('/admin/candidate', 'App\Http\Controllers\AdminController@candidate')->name('admin-candidate')->middleware('admin');



//STUDENT
Route::get('/student', 'App\Http\Controllers\StudentController@index')->name('student-dashboard')->middleware('student');
Route::get('/student/account', 'App\Http\Controllers\StudentController@account')->name('student-account')->middleware('student');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
