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

    public function change($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.headstaff.profile.changepassword', ['id_user' => $id_user]);
    }

    public function userreport($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.headstaff.report.userreport', ['id_user' => $id_user]);
    }

    public function bookreport($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.headstaff.report.bookreport', ['id_user' => $id_user]);
    }

    public function borrowreport($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.headstaff.report.borrowreport', ['id_user' => $id_user]);
    }
}
