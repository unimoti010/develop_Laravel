<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Policies\administratorsPolicy;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $user = User::find(Auth::id());
        return view('home/index', ['user' => $user]);
    }
}
