<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::whereNull('bill_id')->get();
        return response()->json($sales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales = new Sale();

        $product = Product::where('drug_id', $request['drug_id'])->firstOrFail(); // ดึงค่ามาแสดงผล
        // ------  เก็บค่าใน ตาราง sales ตัวแปร product_id -----------//

        $sales->product_id = $product->id;
        $sales->drug_id = $product->drug_id;
        $sales->saleprice = $product->saleprice;
        $sales->pro_name = $product->pro_name;
        // ----------------------input frontend------------------------------//

        $sales->total = $request->total;
        $sales->amount = $request->amount;
        $sales->total = $request['saleprice'] = $product->saleprice * $request['amount'];
        //------------------save database ------------------------//

        $result = $sales->save();

        if ($result) {
            return $sales;
        } else {
            return ["Result" => "ERROR"];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
