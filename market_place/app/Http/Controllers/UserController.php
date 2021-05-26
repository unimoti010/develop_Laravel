<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Textbook;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $textbooks = Textbook::orderBy('price', 'desc')->get();
        return view('user/index',['user' => $user, 'textbooks' => $textbooks ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = \Auth::user();
        return view('user/edit', ['user' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // ddd($request);
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tel' => 'required|string', //|regex:/\A0(\d\-\d{4}|\d{2}\-\d{3}|\d{3}\-\d{2})\-\d{4}\z/'
            'email' => 'required|string|email|max:255', //|unique:users
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user->update($request->all());
        return view('user/index', ['user' => $user ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //退会
    public function destroy(User $user)
    {
        //管理者がユーザを削除する場合は会員一覧に遷移する
        if(\Auth::user()->admin == 0){
            $user->delete();
            return redirect(route('admin.allUsers'));
        }else{

        $user->delete();
        return redirect(route('home'));
        }

    }

}
