<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Sale;
use App\Product;
use App\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $perPage = 25;
        //สินค้ารอจ่ายเงิน 
        $sales = Sale::whereNull('bill_id')
            ->where('user_id', Auth::id() )
            ->latest()->paginate($perPage); 
        
        return view('sales.index', compact('sales'));//compact สร้าง array 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        //อ่านค่า url product
        $drug_id  = $request->get('drug_id');
        //แสดงคิวรี่
        $product = Product::where('drug_id',$drug_id)->firstOrFail();//ความสัมพันธ์ตาม model
        //แสดงใน products

        return view('sales.create', compact('product'));
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
        //ยืนยันการสั่งซื้อ   
        $requestData = $request->all();
        $product= Product::where('drug_id',$requestData['drug_id'])->firstOrFail(); // เรียกค่า drug_id จากตาราง product
        $requestData['product_id'] = $product->id; $requestData['pro_name'] = $product->pro_name;
        $requestData['category_id'] = $product->category_id;
        //คำนวณราคาสินค้า sumvat
        $requestData['total'] = $requestData['saleprice'] = $product->saleprice * $requestData['amount'];
        //ระบุ user_id
        $requestData['user_id'] = Auth::id(); 

        if( $requestData['amount'] > $requestData['stock_ps'] = $product->stock_ps && $product->status_sale = "souout") {
            return redirect('sales');
        } else {
           Sale::create($requestData); 
        }
        return redirect('sales')->with('flash_message', 'Sale added!');
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
        $sale = Sale::findOrFail($id);

        return view('sales.show', compact('sale'));
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
        $products = DB::table('products') 
            ->select('pro_name','drug_id','saleprice','stock_ps')
            ->get();
        $sale = Sale::findOrFail($id);

        return view('sales.edit', compact('sale','products'));
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
        
        $sale = Sale::findOrFail($id);
        $sale->update($requestData);

        return redirect('sales')->with('flash_message', 'Sale updated!');
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
        Sale::destroy($id);

        return redirect('sales')->with('flash_message', 'Sale deleted!');
    }
}
