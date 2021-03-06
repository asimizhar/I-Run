<?php

namespace App\Http\Controllers;

use Auth;
use App\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    public function index()
    {
        $items = Item::all()->where('userid',Auth::user()->id);
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'referenceno' => 'required',
            'pickup' => 'required',
            'delivertime'=>'required',
            'deliverto'=>'required',
            // 'price' => 'required'
        ]);
        $newItem = new Item;
        $newItem->referenceno = request()->input('referenceno');
        $newItem->pickup = request()->input('pickup');
        $newItem->delivertime = request()->input('delivertime');
        $newItem->deliverto = request()->input('deliverto');
        $newItem->userid =Auth::user()->id;
        // $newItem->price = request()->input('price');
        $newItem->save();
        //$food->create(request(['name']));
        return redirect('booking/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $food->update(request(['item']));
        return redirect('booking/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('booking/items');
    }
}
