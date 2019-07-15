<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->id_role) {
            case 1:
                return view('pages.admin.profile.profileuser');
                break;
            case 2:
                return view('pages.headstaff.profile.profileuser');
                break;
            case 3:
                return view('pages.user.profile.profileuser');
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }
}
