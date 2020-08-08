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
        //รวมราคา   
        $total = Sale::whereNull('bill_id')
                ->where('user_id', Auth::id() )->sum('total');  
            

        //กำหนดราคารวม, ผู้ใช้, สถานะ แสดงผลในหน้า blade
        $requestData['total'] = $total;
        $requestData['user_id'] = Auth::id();

        //create bill not update bill_id
        $bill = Bill::create($requestData);

        //update bill_id
        Sale::whereNull('bill_id') 
            ->where('user_id', Auth::id())
            ->update(['bill_id'=> $bill->id]);
       
        //ตัดสต็อคหลังจากอัพเดท bill_id
        $sales = $bill->sales; //เรียกข้อมูล sales ผ่าน bill
            foreach($sales as $sale){ //เรียกข้อมูล ใน salesที่ผ่าน bill เก็บตัวแปร sale
                Lot::where('product_id')//คิวรี่ ข้อมูล Lots โดยใช้ Product_id เรียงค่า created_at จากน้อยไปมาก
                    ->orderBy('created_at','asc');
                /*Product::where('id',$sale->product_id)->decrement('stock_ps', $sale->amount); */ 
            foreach($sale->product->lots as $lot){//เรียกข้อมูล ใน saleผ่าน product ผ่าน lots เก็บตัวแปร lot 
                if($lot->stock_amount > $sale->amount){
                    $product = Product::where('id',$lots->id);
                    Lot::where('id',$sale->product_id)->decrement('stock_amount', $sale->amount); 
                }                    
            }
                return redirect('bills')->with('flash_message', 'Bill added!');
            }
        }
        

        //Lot::where('product_id',$item->product_id)->decrement('stock_amount', $item->amount);
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
