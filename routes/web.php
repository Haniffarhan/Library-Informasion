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
Route::get('/user/profile', 'UserController@profile')->name('user.profile')->middleware('user');
Route::get('/user/change-password', 'UserController@change')->name('user.change');

Route::get('/user/borrowing', 'UserController@borrowing')->name('user.borrowing');
Route::get('/user/borrowing-history', 'UserController@borrowinghistory')->name('user.borrowinghistory');

//Head Staff
Route::get('/headstaff/profile', 'HeadStaffController@profile')->name('headstaff.profile')->middleware('headstaff');
Route::get('/headstaff/change-password', 'HeadStaffController@change')->name('headstaff.change');

Route::get('/headstaff/user-report', 'HeadStaffController@userreport')->name('headstaff.user');
Route::get('/headstaff/book-report', 'HeadStaffController@bookreport')->name('headstaff.book');
Route::get('/headstaff/borrow-report', 'HeadStaffController@borrowreport')->name('headstaff.borrow');

//Admin
Route::get('/admin/profile', 'AdminController@profile')->name('admin.profile')->middleware('admin');
Route::get('/admin/change-password', 'AdminController@change')->name('admin.change');

Route::get('/admin/form-input-user', 'AdminController@forminputuser')->name('admin.forminputuser');
Route::post('/admin/input-user', 'AdminController@inputuser')->name('admin.inputuser');

Route::get('/admin/list-user', 'AdminController@listuser')->name('admin.listuser');

Route::get('/admin/input-book', 'AdminController@inputbook')->name('admin.inputbook');
Route::get('/admin/list-book', 'AdminController@listbook')->name('admin.listbook');

Route::get('/admin/input-borrow', 'AdminController@inputborrow')->name('admin.inputborrow');
Route::get('/admin/list-borrow', 'AdminController@listborrow')->name('admin.listborrow');

Route::get('/', function () {
    return view('pages.login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
