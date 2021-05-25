<?php

namespace App\Http\Controllers;

use App\User;
use App\Textbook;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allUsers(Request $request)
    {
        $query = User::query();
        if ($request->title) {
            $query->where('title', 'LIKE', '%' . $request->title. '%');
        }
        if ($request->category) {
            $query->where('category', 'LIKE', '%' . $request->category. '%');
        }
        if ($request->publisher) {
            $query->where('title', 'LIKE', '%' . $request->publisher. '%');
        }
        if ($request->author) {
            $query->where('author', 'LIKE', '%' . $request->author. '%');
        }
        if ($request->admin) {
            $query->where('admin', '!=', $request->admin);
        }
        $users = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.allUsers',['users' => $users]);
    }

    public function allTextbooks(Request $request)
    {
        $query = Textbook::query();
        if ($request->title) {
            $query->where('title', 'LIKE', '%' . $request->title. '%');
        }
        if ($request->category) {
            $query->where('category', 'LIKE', '%' . $request->category. '%');
        }
        if ($request->author) {
            $query->where('author', 'LIKE', '%' . $request->author. '%');
        }
        if ($request->publisher) {
            $query->where('publisher', 'LIKE', '%' . $request->publisher. '%');
        }
        if ($request->price_min) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->price_max) {
            $query->where('price', '<=', $request->price_max);
        }
        if ($request->state) {
            $query->where('state', 'LIKE', '%' . $request->state. '%');
        }
        $textbooks = $query->orderBy('created_at', 'desc')->paginate(10);
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
