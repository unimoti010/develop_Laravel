<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
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
        return view('user/index',['user' => $user ]);
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
        // $request->user()->fill(['password' => Hash::make($request->password)])->update();

        // $user->fill(array_merge($request->all(), 
        // ['password' => Hash::make($request->password)]))->update();

        $user = \Auth::user()->update([
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => Hash::make($request['password'])
        ]);
        return view('user/index', ['user' => $user ]);

        //訂正前
        // $user->update($request->all());
        // return view('user/index', ['user' => $user ]);
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
        $user->delete();
        return redirect(route('home'));
    }

}
