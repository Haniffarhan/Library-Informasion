<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

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

    public function forminputuser()
    {
        return view('pages.admin.user.inputuser');
    }

    public function inputuser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required|alpha_num',
            'born_place' => 'required|max:255',
            'born_date_day' => 'required|alpha_num',
            'born_date_month' => 'required|alpha_num',
            'born_date_year' => 'required|alpha_num',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'id_role' => 'required|alpha_num',
            'book_price' => 'required|numeric',
        ]);
        $user = User::create($validatedData);
   
        return redirect('admin.inputuser')->with('success', 'User is successfully saved');

        // return view('pages.admin.user.inputuser');
    }

    public function listuser()
    {
        $users = DB::table('users')->get();
        return view('pages.admin.user.listuser', ['users' => $users]);
    }

    public function inputbook()
    {
        return view('pages.admin.book.inputbook');
    }

    public function listbook()
    {
        $books = DB::table('books')->get();
        return view('pages.admin.book.listbook', ['books' => $books]);
    }

    public function inputborrow()
    {
        return view('pages.admin.borrow.inputborrow');
    }

    public function listborrow()
    {
        $borrows = DB::table('borrows')->get();
        return view('pages.admin.borrow.listborrow', ['borrows' => $borrows]);
    }
}
