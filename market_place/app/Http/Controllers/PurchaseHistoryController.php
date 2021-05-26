<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textbook;

class PurchaseHistoryController extends Controller
{
    public function index()
    {
        $textbooks = \Auth::user()->purchase_histories()
        ->orderby('created_at', 'desc')->paginate(20);
        return view('purchase_histories/index', ['textbooks' => $textbooks]);
    }
    public function notification(Request $request) //
    {
        $user_id = \Auth::id();//ログインユーザーのID

        $textbook = Textbook::find($request->id);

        return view('purchase.notification', ['textbooks' => [$textbook]]);
    }


    // public function store(Request $request)
    // {
    //     $textbook = new Textbook;
    //     $textbook->id = $request->id;
    //     $textbook->save();

    //     $user_id = \Auth::id();
    //     $user_id->save();
    // }

}
