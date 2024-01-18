<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\Type;
use App\Models\Prefecture;

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
        $types = Type::all();
        $prefectures = Prefecture::all();

        $randomItems = Item::inRandomOrder()
                ->take(3)->get();
        return view('home', compact('randomItems', 'types', 'prefectures',));
    }
}
