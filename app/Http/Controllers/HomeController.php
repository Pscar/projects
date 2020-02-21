<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;
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
        $information = information::firstOrCreate(

            ['user_id' => Auth::id()],
            ['role' => 'guest'] 
        );
        return view('home' , compact('information') );
    }
    
}
