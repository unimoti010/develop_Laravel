<?php

namespace App\Http\Controllers;

use App\User;
use App\Textbooks;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allUsers()
    {
        $users = User::all();
        return view('admin.allUsers',['users' => $users]);
    }

    public function allTextbooks()
    {
        $textbooks = Textbook::all();
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
