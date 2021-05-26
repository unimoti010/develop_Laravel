<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textbook;

class TextbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $textbooks = Textbook::orderBy('price', 'desc')->get();
        return view('textbooks.index', ['textbooks' => $textbooks]);
    }
    public function purchaseTable(Request $request)//purchase_histories tableに値追加
    {
        // ddd($request);
        // $textbook = PurchaseHistory::create($request->all());
        $textbook_id = $request->id;

        $textbook = Textbook::find($request->id);
        \Auth::user()->purchase_histories()->attach($textbook_id); 
        return view('purchase/notification', ['textbooks' => [$textbook]] );
        // return redirect(route('purchase_histories.index'));
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
    public function show(Textbook $textbook)
    {
        return view('textbooks.show', ['textbook' => $textbook]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
