<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Bill;


class SalesmonthController extends Controller
{
    public function pdf_salesmonth() {
        $bills = DB::table('bills') 
          ->select('*')
          ->get();
        $pdf = PDF::loadView('report/sales_pdf', ['bills'=>$bills]);
        return $pdf->stream('sales.pdf');
  }
}
