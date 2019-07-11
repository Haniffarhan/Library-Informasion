<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('pages.user.profile.profileuser');
    }

    public function change()
    {
        return view('pages.user.profile.changepassword');
    }

    public function borrowing()
    {
        return view('pages.user.book.borrowing');
    }

    public function borrowinghistory()
    {
        return view('pages.user.book.borrowinghistory');
    }
}
