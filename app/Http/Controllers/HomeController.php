<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $displaystatus=\DB::table('users')
        ->join('foods', 'users.id', '=', 'foods.userid')
        ->select('foods.id','users.name','foods.foodname','foods.deliverydatetime','foods.status')
        ->get();

        $status=\DB::table('users')
        ->join('items', 'users.id', '=', 'items.userid')
        ->select('items.id','users.name','items.referenceno','items.delivertime','items.itemstatus')
        ->get();
        

        return view('home', compact('displaystatus','status'));
    }

}
