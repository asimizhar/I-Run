<?php

namespace App\Http\Controllers;

use App\DisplayItem;
use Illuminate\Http\Request;

class DisplayItemController extends Controller
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
        $displayitem=\DB::table('items')
        ->join('users', 'users.id', '=', 'items.userid')
        ->select('items.id','users.name','items.referenceno','items.pickup','items.delivertime','items.deliverto','items.itemstatus')
        ->get();
        return view('displayitem.index', compact('displayitem'));
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
     * @param  \App\DisplayItem  $displayItem
     * @return \Illuminate\Http\Response
     */
    public function show(DisplayItem $displayItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DisplayItem  $displayItem
     * @return \Illuminate\Http\Response
     */
    public function edit(DisplayItem $displayItem)
    {
        $status=\DB::table('items')
        ->select('items.id','items.itemstatus')
        ->first();
        return view('displayitem.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DisplayItem  $displayItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisplayItem $displayItem)
    {
        $status=\DB::table('items')
        ->limit(1)
        ->update(request(['itemstatus']));

        return redirect('user/displayitem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DisplayItem  $displayItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisplayItem $displayItem)
    {
        //
    }
}
