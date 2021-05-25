<?php

namespace App\Http\Controllers;

use App\RegisterHistory;
use Illuminate\Http\Request;

class RegisterHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //register_historiesテーブルから登録日時が新しい順で取得してviewに返す(ログインしているユーザの)
        $textbooks = \Auth::user()->register_histories()->orderBy('created_at', 'desc')->paginate(20);
        return view('register_histories/index',['textbooks' => $textbooks]);
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
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterHistory  $registerHistory
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterHistory $registerHistory)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterHistory  $registerHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterHistory $registerHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterHistory  $registerHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterHistory $registerHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterHistory  $registerHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterHistory $registerHistory)
    {
        //
    }
}
