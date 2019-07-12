<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile()
    {
        return view('pages.admin.profile.profileuser');
    }

    public function change()
    {
        return view('pages.admin.profile.changepassword');
    }

    public function inputuser()
    {
        return view('pages.admin.user.inputuser');
    }

    public function listuser()
    {
        return view('pages.admin.user.listuser');
    }

    public function inputbook()
    {
        return view('pages.admin.book.inputbook');
    }

    public function listbook()
    {
        return view('pages.admin.book.listbook');
    }

    public function inputborrow()
    {
        return view('pages.admin.borrow.inputborrow');
    }

    public function listborrow()
    {
        return view('pages.admin.borrow.listborrow');
    }
}
