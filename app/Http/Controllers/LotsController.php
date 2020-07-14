<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lot;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LotsController extends Controller
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
        
        $products = DB::table('products')//array products
            ->select('drug_id','pro_name','saleprice')
            ->get();
        if (!empty($keyword)) {
            $lot = Lot::where('deteexp_at', 'LIKE', "%$keyword%")
                ->orWhere('drug_id', 'LIKE', "%$keyword%")
                ->orWhere('cost', 'LIKE', "%$keyword%")
                ->orWhere('stock_im', 'LIKE', "%$keyword%")
                ->orWhere('product_id','LIKE',"%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $lot = Lot::latest()->paginate($perPage);
        }

        return view('lots.index', compact('lot','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $drug_id  = $request->get('drug_id');
        //แสดงคิวรี่
        $product = Product::where('drug_id',$drug_id)->firstOrFail();
        return view('lots.create',compact('product'));
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

        $lot = Lot::create($requestData);
        //update stockps in products
        Product::where('id',$lot->product_id) //เรียก product_id ใน tabal lot ที่มี id ของ tabal product
        //update เพิ่มสต็อคสินค้า ใน tabal product ให้เท่ากับจำนวนที่ระบุใน lot
            ->increment('stock_ps',$lot->stock_im) 
            ->get();

        return redirect('lots')->with('flash_message', 'Lot added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $lot = Lot::findOrFail($id);
        

        return view('lots.show', compact('lot'));
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
        $product = DB::table('products')//array products
            ->select('id','pro_name','drug_id')
            ->get();
        $lot = Lot::findOrFail($id);

        return view('lots.edit', compact('lot','product'));
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
        
        $lot = Lot::findOrFail($id);
        $lot->update($requestData);

        return redirect('lots')->with('flash_message', 'Lot updated!');
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
        Lot::destroy($id);

        return redirect('lots')->with('flash_message', 'Lot deleted!');
    }
}
