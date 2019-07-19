<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function profile($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.admin.profile.profileuser', ['id_user' => $id_user]);
    }

    /* User Dropdown */

    public function forminputuser($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.admin.user.inputuser', ['id_user' => $id_user]);
    }

    public function inputuser(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'gender' => $request->gender,
            'born_place' => $request->born_place,
            'born_date_day' => $request->born_date_day,
            'born_date_month' => $request->born_date_month,
            'born_date_year' => $request->born_date_year,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'id_role' => $request->id_role,
            'password' => bcrypt($request->phone_number),
        ]);

        return redirect('/login');
    }

    public function listuser($id_user)
    {
        $id_user = User::find($id_user);
        $users = DB::table('users')->get();
        return view('pages.admin.user.listuser', ['users' => $users, 'id_user' => $id_user]);
    }

    public function updateuser($id_user, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'born_place' => 'required',
            'born_date_day' => 'required',
            'born_date_month' => 'required',
            'born_date_year' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'id_role' => 'required',
            'password' => 'required',
        ]);

        $users = User::find($id_user);
        $users->name = $request->name;
        $users->gender = $request->gender;
        $users->born_place = $request->born_place;
        $users->born_date_day = $request->born_date_day;
        $users->born_date_month = $request->born_date_month;
        $users->born_date_year = $request->born_date_year;
        $users->address = $request->address;
        $users->email = $request->email;
        $users->phone_number = $request->phone_number;
        $users->save();
        return redirect('admin.listuser');
    }

    /* End User Dropdown */

    public function forminputbook($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.admin.book.inputbook', ['id_user' => $id_user]);
    }

    public function inputbook(Request $request)
    {
        DB::table('books')->insert([
            'book_title' => $request->book_title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'description' => $request->description,
        ]);

        return redirect('/login');
    }

    public function listbook($id_user)
    {
        $id_user = User::find($id_user);
        $books = DB::table('books')->get();
        return view('pages.admin.book.listbook', ['books' => $books, 'id_user' => $id_user]);
    }

    public function forminputborrow($id_user)
    {
        $id_user = User::find($id_user);
        return view('pages.admin.borrow.inputborrow', ['id_user' => $id_user]);
    }

    public function inputborrow(Request $request)
    {
        DB::table('borrows')->insert([
            'id_book' => $request->id_book,
            'id_user' => $request->id_user,
            'borrow_date_day' => $request->borrow_date_day,
            'borrow_date_month' => $request->borrow_date_month,
            'borrow_date_year' => $request->borrow_date_year,
            'return_date_day' => $request->return_date_day,
            'return_date_month' => $request->return_date_month,
            'return_date_year' => $request->return_date_year,
        ]);

        return redirect('/login');
    }

    public function listborrow($id_user)
    {
        $id_user = User::find($id_user);
        $borrows = DB::table('borrows')->get();
        return view('pages.admin.borrow.listborrow', ['borrows' => $borrows, 'id_user' => $id_user]);
    }
}
