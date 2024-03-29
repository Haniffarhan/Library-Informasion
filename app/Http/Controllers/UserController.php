<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Borrow;

class UserController extends Controller
{
    public function profile($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.user.profile.profileuser', ['id_user' => $id_user]);
    }

    public function borrowing($id_user)
    {
        $id_user = User::find($id_user);
        $borrows = Borrow::findOrFail($id_user);
        return view('pages.user.book.borrowing', ['borrows' => $borrows,'id_user' => $id_user]);
    }

    public function borrowinghistory($id_user)
    {
        $id_user = User::find($id_user);
        $borrows = Borrow::findOrFail($id_user);
        return view('pages.user.book.borrowinghistory', ['borrows' => $borrows,'id_user' => $id_user]);
    }
}
