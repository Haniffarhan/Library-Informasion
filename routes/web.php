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

    /*Profile Dropdown*/

        Route::get('/user/profile/{id_user}', 'UserController@profile')->name('user.profile')->middleware('user');
        Route::get('/user/change-password/{id_user}', 'UserController@change')->name('user.change')->middleware('user');

    /*End Profile Dropdown*/

    /*---------------------------------------------------------------------------------------------------*/

    /*Borrow Dropdown*/

        Route::get('/user/borrowing/{id_user}', 'UserController@borrowing')->name('user.borrowing')->middleware('user');
        Route::get('/user/borrowing-history/{id_user}', 'UserController@borrowinghistory')->name('user.borrowinghistory')->middleware('user');

    /*End Borrow Dropdown*/

//End User

/*---------------------------------------------------------------------------------------------------*/

//Head Staff

    /*Profile Dropdown*/

        Route::get('/headstaff/profile/{id_user}', 'HeadStaffController@profile')->name('headstaff.profile')->middleware('headstaff');
        Route::get('/headstaff/change-password/{id_user}', 'HeadStaffController@change')->name('headstaff.change')->middleware('headstaff');

    /*End Profile Dropdown*/

    /*---------------------------------------------------------------------------------------------------*/

    /*Report Dropdown*/

        Route::get('/headstaff/user-report/{id_user}', 'HeadStaffController@userreport')->name('headstaff.user')->middleware('headstaff');
        Route::get('/headstaff/book-report/{id_user}', 'HeadStaffController@bookreport')->name('headstaff.book')->middleware('headstaff');
        Route::get('/headstaff/borrow-report/{id_user}', 'HeadStaffController@borrowreport')->name('headstaff.borrow')->middleware('headstaff');

    /*End Report Dropdown*/

//End Head Staff

/*---------------------------------------------------------------------------------------------------*/

//Admin

    /*Profile Dropdown*/

        Route::get('/admin/profile/{id_user}', 'AdminController@profile')->name('admin.profile')->middleware('admin');
        Route::get('/admin/change-password/{id_user}', 'AdminController@change')->name('admin.change')->middleware('admin');

    /*End Profile Dropdown*/

    /*---------------------------------------------------------------------------------------------------*/

    /*User Dropdown*/

        Route::get('/admin/form-input-user/{id_user}', 'AdminController@forminputuser')->name('admin.forminputuser')->middleware('admin');
        Route::post('/admin/input-user', 'AdminController@inputuser')->name('admin.inputuser')->middleware('admin');
        Route::get('/admin/list-user/{id_user}', 'AdminController@listuser')->name('admin.listuser')->middleware('admin');

    /*End User Dropdown*/

    /*---------------------------------------------------------------------------------------------------*/

    /*Book Dropdown*/

        Route::get('/admin/form-input-book/{id_user}', 'AdminController@forminputbook')->name('admin.forminputbook')->middleware('admin');
        Route::post('/admin/input-book', 'AdminController@inputbook')->name('admin.inputbook')->middleware('admin');
        Route::get('/admin/list-book/{id_user}', 'AdminController@listbook')->name('admin.listbook')->middleware('admin');

    /*End Book Dropdown*/

    /*---------------------------------------------------------------------------------------------------*/

    /*Borrow Dropdown*/

        Route::get('/admin/form-input-borrow/{id_user}', 'AdminController@forminputborrow')->name('admin.forminputborrow')->middleware('admin');
        Route::post('/admin/input-borrow', 'AdminController@inputborrow')->name('admin.inputborrow')->middleware('admin');
        Route::get('/admin/list-borrow/{id_user}', 'AdminController@listborrow')->name('admin.listborrow')->middleware('admin');

    /*End Book Dropdown*/

//End Admin

/*---------------------------------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('pages.login.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
