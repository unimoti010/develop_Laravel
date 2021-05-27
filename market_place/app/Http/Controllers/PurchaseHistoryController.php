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
        $textbooks = DB::select('select title, price, purchase_histories.created_at from textbooks 
        join purchase_histories on textbooks.id = purchase_histories.textbook_id 
        where purchase_histories.user_id = ' .\Auth::id(). ' order by purchase_histories.created_at desc ');

        $dbh = DB::connection()->getPdo();
        $stmt = $dbh->prepare('select title, price, purchase_histories.created_at from textbooks 
        join purchase_histories on textbooks.id = purchase_histories.textbook_id 
        where purchase_histories.user_id = ' .\Auth::id(). ' order by purchase_histories.created_at desc ');

        $stmt->execute();
        $saved_info = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return view('purchase/index', ['textbooks' => $saved_info]);

    }


    public function notification(Request $request) 
    {
        $user_id = \Auth::id();

        $textbook = Textbook::find($request->id);

        return view('purchase/notification', ['textbooks' => [$textbook]]);
    }
}
