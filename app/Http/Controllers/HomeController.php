<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
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
    public function sale(Request $request){
        // SELECT DISTINCT year(created_at) as y , month(created_at) as m, sum(total) as t, sum(percost) as cost 
        // FROM `sales` 
        // group by year(created_at), month(created_at)
       $sales = Sale::selectRaw('year(created_at) as y , month(created_at) as m , sum(total) as t , sum(percost) as cost ,sum(profit) as p')
                    ->groupBy('y','m')
                    ->get();
       $sale =  Sale::selectRaw('month(created_at) as m ,day(created_at) as d , sum(total) as t , sum(percost) as cost ,sum(profit) as p')
                    ->groupBy('m','d')
                    ->orderBy('d','asc')
                    ->whereMonth('created_at', '10')
                    ->get();
       return view('home', compact('sales','sale')); 
    }
}
