<?php

namespace App\Http\Controllers;

use App\RegisterHistory;
use App\Textbook;
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

    public function show(Textbook $textbook)
    {
        return view('register_histories.show', ['textbook' => $textbook]);
    }
}
