<?php

namespace App\Http\Controllers;

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
        $foods = Food::all()->sortBy('name');
        return view('foods.index', compact('foods'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create');
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
            'name' => 'required',
            'price' => 'required',
            'placeorder'=>'required',
            'deliverydatetime'=>'required',
            'placedeliver'=>'required',

        ]);
        $newFood = new Food;
        $newFood->name = request()->input('name');
        $newFood->price = request()->input('price');
        $newFood->placeorder = request()->input('placeorder');
        $newFood->deliverydatetime = request()->input('deliverydatetime');
        $newFood->placedeliver = request()->input('placedeliver');
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
        $food->update(request(['name']));
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
