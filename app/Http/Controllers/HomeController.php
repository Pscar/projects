<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sale;

use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }
    public function sale(){
        $sales = DB::table('sales')
                ->select('total','profit','percost')
                ->whereMonth('created_at', '8')
                ->get();
        return view('home',compact('sales'));
    }
    
}
