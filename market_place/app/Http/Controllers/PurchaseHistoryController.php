<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textbook;
use App\PurchaseHistory;
use Illuminate\Database\Query\Builder;

class PurchaseHistoryController extends Controller
{
    public function index()
    {
        // $textbooks = \Auth::user()->purchase_histories()
        // ->orderby('created_at', 'desc')->paginate(20);

        // $textbooks = PurchaseHistory::with('textbook')->get();

        $textbooks = Textbook::with([
            'purchase_history'=> function (Builder $query){
                $query->where('user_id', '=', \Auth::id());}])->paginate(20);

        // $textbooks = PurchaseHistory::all()->textbook()->where('user_id', '=', \Auth::id() )->paginate(20);

        
        ddd($textbooks);
        return view('purchase/index', ['textbooks' => $textbooks]);
    }
    public function notification(Request $request) //
    {
        $user_id = \Auth::id();//ログインユーザーのID

        $textbook = Textbook::find($request->id);

        return view('purchase/notification', ['textbooks' => [$textbook]]);
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
