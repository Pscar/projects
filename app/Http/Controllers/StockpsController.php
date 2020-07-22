<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Product;
class StockpsController extends Controller
{
   
    public function pdf_index() {
      $products = DB::table('products') 
        ->select('*')
        ->get();
        $pdf = PDF::loadView('report/product_pdf', ['products'=>$products] );
        return $pdf->stream('product.pdf'); //แบบนี้จะ stream มา preview
        //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
  }
}
