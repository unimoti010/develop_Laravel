<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textbook;
use App\PurchaseHistory;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\stdClass;
use PDO;

class PurchaseHistoryController extends Controller
{
    public function index()
    {
        
        // $textbooks = Textbook::whereHas('purchase_history', function($query){
        // $query->where('user_id', '=', \Auth::id());})->paginate(20);
        $textbooks = DB::select('select title, price, purchase_histories.created_at from textbooks join purchase_histories on textbooks.id = purchase_histories.textbook_id where purchase_histories.user_id = ' .\Auth::id());
        $dbh = DB::connection()->getPdo();
        $stmt = $dbh->prepare('select title, price, purchase_histories.created_at from textbooks join purchase_histories on textbooks.id = purchase_histories.textbook_id where purchase_histories.user_id = ' .\Auth::id());
        $stmt->execute();
        $saved_info = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // ddd($saved_info);

        //Textbookモデルから、purchase_historiesテーブルのuser_idとログインユーザが一致しているもの
        //つまりログインユーザの購入した本の履歴

        // $textbooks = \App\Textbook::select()
        // ->join('purchase_history', 'user_id', '=', \Auth::id())
        // ->where('');

        // ddd($textbooks);
        // $stdTextbooks = [];
        // foreach($textbooks as $textbook){
        //     $stdTextbook = new \stdClass();
        //     $stdTextbook -> title = $textbook -> title;
        //     $stdTextbook -> price = $textbook -> price;
        //     $stdTextbook -> created_at = $textbook -> created_at;
        //     array_push($stdTextbooks, $stdTextbook);
        // };
        // ddd(gettype($stdTextbooks));
        return view('purchase/index', ['textbooks' => $saved_info]);


        // $textbooks = \Auth::user()->purchase_histories()
        // ->orderby('created_at', 'desc')->paginate(20);

        // $textbooks = PurchaseHistory::with('textbook')->get();

        // $textbooks = Textbook::with([
        //     'purchase_history'=> function (Builder $query){
        //         $query->where('user_id', '=', \Auth::id());}])->paginate(20);


        // $textbooks = PurchaseHistory::all()->textbook()->where('user_id', '=', \Auth::id() )->paginate(20);
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
