<?php

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

//User
Route::get('/profile', 'UserController@profile')->name('user.profile');
Route::get('/change-password', 'UserController@change')->name('user.change');
Route::get('/borrowing', 'UserController@borrowing')->name('user.borrowing');
Route::get('/borrowing-history', 'UserController@borrowinghistory')->name('user.borrowinghistory');

//Head Staff
Route::get('/profile', 'HeadStaffController@profile')->name('headstaff.profile');
Route::get('/change-password', 'HeadStaffController@change')->name('headstaff.change');
Route::get('/user-report', 'HeadStaffController@userreport')->name('headstaff.user');
Route::get('/book-report', 'HeadStaffController@bookreport')->name('headstaff.book');
Route::get('/borrow-report', 'HeadStaffController@borrowreport')->name('headstaff.borrow');

Route::get('/', function () {
    return view('pages.headstaff.report.borrowreport');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
