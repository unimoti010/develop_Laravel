<?php

namespace App\Http\Controllers;

use App\User;
use App\Textbook;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allUsers()
    {
        $users = User::orderBy('created_at','desc')->get();
        $users = User::paginate(10);
        return view('admin.allUsers',['users' => $users]);
    }

    public function allTextbooks()
    {
        $textbooks = Textbook::orderBy('created_at','desc')->get();
        $textbooks = Textbook::paginate(10);
        return view('admin.allTextbooks',['textbooks' => $textbooks]);
    }

    public function searchUsers()
    {
        //
    }

    public function searchTextbooks()
    {
        //
    }
}
