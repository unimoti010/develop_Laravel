<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Textbook;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Gate;
use Illuminate\Auth\Access\Gate as AccessGate;
use App\Http\Requests\AdminRequest;

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
        if(Gate::allows('isAdmin') || Gate::allows('myData')){
            return view('user.edit', ['user' => $user]);
        } else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'tel' => ['required', 'string', 'regex:/^0\d{2,3}-\d{1,4}-\d{4}$/'],
            'email' => 'required|string|email|max:255|',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        if(Gate::allows('isAdmin')){
            $user->update([
                'name' => $request->name,
                'address' => $request->address,
                'tel' => $request->tel,
                'email' => $request->email,
                'password' => Hash::make($request['password']),
            ]);
            return redirect('admin/allUsers');
        } elseif (Gate::allows('myData')){
            $user->update([
                'name' => $request->name,
                'address' => $request->address,
                'tel' => $request->tel,
                'email' => $request->email,
                'password' => Hash::make($request['password']),
            ]);
            return redirect('/');
        } else {
            return redirect('/');
        }
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
        if(Gate::allows('isAdmin')){
            $user->delete();
            return redirect(route('admin.allUsers'));
        } elseif (Gate::allows('myData')){
            $user->delete();
            return redirect(route('home'));
        } else {
            return redirect(route('home'));
        }
    }

}
