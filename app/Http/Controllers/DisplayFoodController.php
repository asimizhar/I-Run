<?php

namespace App\Http\Controllers;

use App\DisplayFood;
use Illuminate\Http\Request;

class DisplayFoodController extends Controller
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
        $displayfood=\DB::table('foods')
           ->join('users', 'users.id', '=', 'foods.userid')
           ->select('foods.id','users.name','foods.foodname','foods.price','foods.deliverydatetime','foods.placedeliver','foods.placeorder','foods.status')
           ->get();
           return view('displayfood.index', compact('displayfood'));
        
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
     * @param  \App\DisplayFood  $displayFood
     * @return \Illuminate\Http\Response
     */
    public function show(DisplayFood $displayFood)
    {
        $status=\DB::table('foods')
           ->join('users', 'users.id', '=', 'foods.userid')
           ->select('foods.id','users.name','foods.foodname','foods.price','foods.deliverydatetime','foods.placedeliver','foods.placeorder','foods.status')
           ->first();
        return view('displayfood.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DisplayFood  $displayFood
     * @return \Illuminate\Http\Response
     */
    public function edit(DisplayFood $displayFood)
    {
        $status=\DB::table('foods')
        ->join('users', 'users.id', '=', 'foods.userid')
        ->select('foods.id','users.name','foods.foodname','foods.price','foods.deliverydatetime','foods.placedeliver','foods.placeorder','foods.status')
        ->first();
        return view('displayfood.edit', compact('status'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DisplayFood  $displayFood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisplayFood $displayFood)
    {
        $status=\DB::table('foods')
        ->update(request(['status']));

        return redirect('user/displayfood');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DisplayFood  $displayFood
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisplayFood $displayFood)
    {
        $status->delete();
        return redirect('booking/foods');  
    }
}
