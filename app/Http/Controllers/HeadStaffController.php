<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadStaffController extends Controller
{
    public function profile()
    {
        return view('pages.headstaff.profile.profileuser');
    }

    public function change()
    {
        return view('pages.headstaff.profile.changepassword');
    }

    public function userreport()
    {
        return view('pages.headstaff.report.userreport');
    }

    public function bookreport()
    {
        return view('pages.headstaff.report.bookreport');
    }

    public function borrowreport()
    {
        return view('pages.headstaff.report.borrowreport');
    }
}
