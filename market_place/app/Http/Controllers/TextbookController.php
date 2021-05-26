<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textbook;
use App\User;

class TextbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textbooks = Textbook::orderBy('price', 'desc')->paginate(10);
        return view('textbooks.index', ['textbooks' => $textbooks]);
    }
    public function purchaseTable(Request $request)//purchase_histories tableに値追加
    {
        // ddd($request);
        // $textbook = PurchaseHistory::create($request->all());
        $textbook_id = $request->id;

        \Auth::user()->purchase_histories()->attach($textbook_id); 
        return redirect(route('purchase_histories.index'));
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
        $this->validate($request, [
            'title' => 'required|max:50',
            'category' => 'required',
            'author' => 'required|max:30',
            'publisher' => 'required|max:30',
            'price' => 'required',
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
        return view('textbooks.show', ['textbook' => $textbook]);
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
            'price' => 'required',
            'state' => 'required'
        ]);
        $textbook->update($request->all());
        return redirect(route('register_histories.show',$textbook));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textbook $textbook)
    {
        $textbook->delete();
        return redirect(route('register_histories.index'));
    }
}
