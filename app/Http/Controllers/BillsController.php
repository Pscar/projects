<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bill;
use App\Sale;
use App\Product;
use App\Lot;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bills = Bill::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bills = Bill::latest()->paginate($perPage);
        }

        return view('bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $bill_id  = $request->get('bill_id');
        $sales = Sale::findOrFail($bill_id);
        
        return view('bills.create',compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();

        $total = Sale::whereNull('bill_id')
                ->where('user_id', Auth::id())->sum('total');  

        $requestData['total'] = $total;
        $requestData['user_id'] = Auth::id();
        $bill = Bill::create($requestData);

        Sale::whereNull('bill_id') 
            ->where('user_id', Auth::id())
            ->update(['bill_id'=> $bill->id]);
        $id = $bill->id;
        $sales = $bill->sales; 

        foreach($sales as $sale) { 

            Product::where('id',$sale->product_id)->decrement('stock_ps', $sale->amount);                                         
            $lots = $sale->product->lots()->orderBy('created_at','asc')->get();
            
            $sum = 0; 
            foreach ($lots as $lot) {

                if($lot->stock_amount > $sale->amount) {                    
                    $percost = $sale->amount * $lot->percost;
                    $sum += $percost;
                   
                    Lot::where('id',$lot->id)->decrement('stock_amount', $sale->amount);
                    $lot->stock_amount = 0; 
                    break;  

                } else if ($lot->stock_amount <= $sale->amount) {

                    $stock_amount =  $lot->stock_amount;     
                    $percost = $stock_amount * $lot->percost; 
                    $sum += $percost;

                    Lot::where('id',$lot->id)->decrement('stock_amount', $lot->stock_amount);               
                    $sale->amount = $sale->amount - $lot->stock_amount; 
                    
                }                    
            }
            $profit = $sale->total - $sum;
            
            $bill->sales() 
                ->where('product_id',$sale->product_id)
                ->update(['percost'=> $sum , 'profit'=> $profit]); 
        }
            return redirect("bills/$bill->id")->with('flash_message', 'Bill added!');
    }
     /**Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $bill = Bill::findOrFail($id);

        return view('bills.show', compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $bill = Bill::findOrFail($id);

        return view('bills.edit', compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $bill = Bill::findOrFail($id);
        $bill->update($requestData);

        return redirect('bills')->with('flash_message', 'Bill updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Bill::destroy($id);

        return redirect('bills')->with('flash_message', 'Bill deleted!');
    }
}
