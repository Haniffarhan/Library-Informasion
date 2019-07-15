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
Route::get('/user/change-password', 'UserController@change')->name('user.change')->middleware('user');

Route::get('/user/borrowing', 'UserController@borrowing')->name('user.borrowing')->middleware('user');
Route::get('/user/borrowing-history', 'UserController@borrowinghistory')->name('user.borrowinghistory')->middleware('user');

/*---------------------------------------------------------------------------------------------------*/

//Head Staff
Route::get('/headstaff/profile', 'HeadStaffController@profile')->name('headstaff.profile')->middleware('headstaff');
Route::get('/headstaff/change-password', 'HeadStaffController@change')->name('headstaff.change')->middleware('headstaff');

Route::get('/headstaff/user-report', 'HeadStaffController@userreport')->name('headstaff.user')->middleware('headstaff');
Route::get('/headstaff/book-report', 'HeadStaffController@bookreport')->name('headstaff.book')->middleware('headstaff');
Route::get('/headstaff/borrow-report', 'HeadStaffController@borrowreport')->name('headstaff.borrow')->middleware('headstaff');

/*---------------------------------------------------------------------------------------------------*/

//Admin
Route::get('/admin/profile', 'AdminController@profile')->name('admin.profile')->middleware('admin');
Route::get('/admin/change-password', 'AdminController@change')->name('admin.change')->middleware('admin');

/*User Dropdown*/

Route::get('/admin/form-input-user', 'AdminController@forminputuser')->name('admin.forminputuser')->middleware('admin');
Route::post('/admin/input-user', 'AdminController@inputuser')->name('admin.inputuser')->middleware('admin');
Route::get('/admin/list-user', 'AdminController@listuser')->name('admin.listuser')->middleware('admin');
Route::get('/admin/edit-user/{id_user}', 'AdminController@edituser')->name('admin.edituser')->middleware('admin');
Route::put('/admin/update-user/{id_user}', 'AdminController@updateuser')->name('admin.updateuser')->middleware('admin');

/*End User Dropdown*/

Route::get('/admin/form-input-book', 'AdminController@forminputbook')->name('admin.forminputbook')->middleware('admin');
Route::post('/admin/input-book', 'AdminController@inputbook')->name('admin.inputbook')->middleware('admin');

Route::get('/admin/list-book', 'AdminController@listbook')->name('admin.listbook')->middleware('admin');

Route::get('/admin/form-input-borrow', 'AdminController@forminputborrow')->name('admin.forminputborrow')->middleware('admin');
Route::post('/admin/input-borrow', 'AdminController@inputborrow')->name('admin.inputborrow')->middleware('admin');

Route::get('/admin/list-borrow', 'AdminController@listborrow')->name('admin.listborrow')->middleware('admin');

/*---------------------------------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('pages.login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
