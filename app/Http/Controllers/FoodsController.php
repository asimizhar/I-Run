<?php

namespace App\Http\Controllers;

use Auth;
use App\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
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
        $foods = Food::all()->where('userid',Auth::user()->id);
        return view('foods.index', compact('foods'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foods = Food::all(['id', 'placedeliver']);
        return view('foods.create',compact('foods',$foods));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Food $food)
    {
        request()->validate([
            'foodname' => 'required',
            'price' => 'required',
            'placeorder'=>'required',
            'deliverydatetime'=>'required',
            'placedeliver'=>'required',

        ]);
        $newFood = new Food;
        $newFood->foodname = request()->input('foodname');
        $newFood->price = request()->input('price');
        $newFood->placeorder = request()->input('placeorder');
        $newFood->deliverydatetime = request()->input('deliverydatetime');
        $newFood->placedeliver = request()->input('placedeliver');
        $newFood->userid =Auth::user()->id;
        $newFood->save();
        //$food->create(request(['name']));
        return redirect('booking/foods');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('foods.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('foods.edit', compact('food'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $food->update(request(['foodname']));
        return redirect('booking/foods');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect('booking/foods');        

    }
}
