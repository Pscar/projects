<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function chart(){
        $sales = DB::table('sales')
                        ->select('saleprice','amount')
                        ->orderBy('saleprice', 'ASC')
                        ->get();
      return response()->json($sales);
    }
    
}
