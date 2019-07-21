<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SplashController extends Controller
{
    public function show()
    {
        return view('layouts.splash_screen');
    }

    public function next()
    {
        switch (Auth::user()->id_role) {
            case 1:
                $id_user = Auth::user()->id_user;
                return redirect()->route('admin.profile', ['id_user' => $id_user]);
                break;
            case 2:
                $id_user = Auth::user()->id_user;
                return redirect()->route('headstaff.profile', ['id_user' => $id_user]);
                break;
            case 3:
                $id_user = Auth::user()->id_user;
                return redirect()->route('user.profile', ['id_user' => $id_user]);
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }
}
