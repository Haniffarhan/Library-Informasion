<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminAPIController extends Controller
{
    public function my_first_api()
    {
        $data = [
            'name' => 'haniffarhan',
            'mobile' => '0852741963852',
            'email' => 'haniffarhan@mail.com',
            'status' => 0
        ];

        return response()->json($data);
    }

    public function listuserapi()
    {
        $data = DB::table('users')->get();

        return response()->json($data);
    }

    public function listbookapi()
    {
        $data = DB::table('books')->get();

        return response()->json($data);
    }

    public function listborrowapi()
    {
        $data = DB::table('borrows')->get();

        return response()->json($data);
    }
}
