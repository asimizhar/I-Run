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
        $displaystatus=\DB::table('foods')
        ->join('users', 'foods.userid', '=', 'users.id')
        ->select('foods.foodname','users.name','foods.deliverydatetime','foods.status')
        ->get();
        return view('home', compact('displaystatus'));
    }

}
