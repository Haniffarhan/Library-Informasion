<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HeadStaffController extends Controller
{
    public function profile($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.headstaff.profile.profileuser', ['id_user' => $id_user]);
    }

    public function userreport($id_user)
    {
        $id_user = User::find($id_user);
        $users = DB::table('users')->get();
        return view('pages.headstaff.report.userreport', ['users' => $users, 'id_user' => $id_user]);
    }

    public function bookreport($id_user)
    {
        $id_user = User::find($id_user);
        $books = DB::table('books')->get();
        return view('pages.headstaff.report.bookreport', ['books' => $books, 'id_user' => $id_user]);
    }

    public function borrowreport($id_user)
    {
        $id_user = User::find($id_user);
        $borrows = DB::table('borrows')->get();
        return view('pages.headstaff.report.borrowreport', ['borrows' => $borrows, 'id_user' => $id_user]);
    }
}
