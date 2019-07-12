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

//Admin
Route::get('/profile', 'AdminController@profile')->name('admin.profile');
Route::get('/change-password', 'AdminController@change')->name('admin.change');

Route::get('/input-user', 'AdminController@inputuser')->name('admin.inputuser');
Route::get('/list-user', 'AdminController@listuser')->name('admin.listuser');

Route::get('/input-book', 'AdminController@inputbook')->name('admin.inputbook');
Route::get('/list-book', 'AdminController@listbook')->name('admin.listbook');

Route::get('/input-borrow', 'AdminController@inputborrow')->name('admin.inputborrow');
Route::get('/list-borrow', 'AdminController@listborrow')->name('admin.listborrow');

Route::get('/', function () {
    return view('pages.admin.profile.profileuser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
