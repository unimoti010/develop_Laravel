<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textbook;
use App\User;
use App\RegisterHistory;


class TextbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Textbook::query();
        if ($request->title) {
            $query->where('title', 'LIKE', '%' . $request->title. '%');
        }
        if ($request->category) {
            $query->where('category', 'LIKE', '%' . $request->category. '%');
        }
        if ($request->author) {
            $query->where('author', 'LIKE', '%' . $request->author. '%');
        }
        if ($request->publisher) {
            $query->where('publisher', 'LIKE', '%' . $request->publisher. '%');
        }
        if ($request->price_min) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->price_max) {
            $query->where('price', '<=', $request->price_max);
        }
        if ($request->state) {
            $query->where('state', 'LIKE', '%' . $request->state. '%');
        }
        $textbooks = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('textbooks.index', ['textbooks' => $textbooks]);
    }
    public function purchaseTable(Request $request)//purchase_histories tableに値追加
    {
        $textbook_id = $request->id;

        $textbook = Textbook::find($request->id);
        \Auth::user()->purchase_histories()->attach($textbook_id); 
        return view('purchase/notification', ['textbooks' => [$textbook]] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $textbook = new Textbook;
        return view('textbooks.create', ['textbook' => $textbook]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd('hoge');
        $this->validate($request, [
            'title' => 'required|max:50',
            'category' => 'required',
            'author' => 'required|max:30',
            'publisher' => 'required|max:30',
            'price' => ['required','regex:/^[0-9]{1,9}$/'],
            'state' => 'required'
        ]);
        $textbook = Textbook::create($request->all());
        $textbook_id = $textbook->id;
        \Auth::user()->register_histories()->attach($textbook_id); 
        return redirect(route('register_histories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Textbook $textbook)
    {
        $register_history = RegisterHistory::where('textbook_id', $textbook->id)->first();
        // ddd($register_history);

        return view('textbooks.show', ['textbook' => $textbook, 'register_history' => $register_history]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Textbook $textbook)
    {
        return view('textbooks.edit',['textbook' => $textbook]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Textbook $textbook)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'category' => 'required',
            'author' => 'required|max:30',
            'publisher' => 'required|max:30',
            'price' => ['required','regex:/^[0-9]{1,9}$/'],
            'state' => 'required'
        ]);
        $textbook->update($request->all());

        //管理者が情報を編集して保存した際は教科書一覧に遷移
        if(\Auth::user()->admin == 0){
            return redirect(route('admin.allTextbooks'));
        }
        return redirect(route('textbooks.show',$textbook));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textbook $textbook)
    {
        //管理者が教科書を消す際は教科書一覧に遷移
        if(\Auth::user()->admin == 0){
            $textbook->delete();
            return redirect(route('admin.allTextbooks'));
        }
        $textbook->delete();
        return redirect(route('register_histories.index'));
    }
}
