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
        $keyword = $request->get('search');
        $perPage = 25;
        if (!empty($keyword)) {
            $sales = Sale::where('saleprice', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('amount', 'LIKE', "%$keyword%")
                ->orWhere('total_sale', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sales = Sale::latest()->paginate($perPage);
        }

        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {

        $drug_id_keyword = $request->get('drug_id');//ดึง drug_id จาก url : sale/create?product=AB111112111*/
        //ดึงข้อมูล where ขึ้นมาเฉพาะสินค้าที่เราต้องการ 
        $drug_id = Product::where('drug_id',$drug_id_keyword)->firstOrFail(); //ถ้าเจอหลายตัวให้ดึงตัวแรก แต่ถ้าไม่เจอสักตัวให้ 404*/

        return view('sales.create', compact('drug_id'));
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
        //คำนวณจำนวนสินค้า
        $requestData['total'] = $requestData['amount'] * $requestData['saleprice'];
        //ระบุ bill_id
        /*$requestData['bill_id'] = Sale::id();**/


        Sale::create($requestData);
        
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
        $product = DB::table('products') 
            ->select('pro_name','drug_id','saleprice')
            ->get();
        $sale = Sale::findOrFail($id);

        return view('sales.edit', compact('sale','product'));
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
