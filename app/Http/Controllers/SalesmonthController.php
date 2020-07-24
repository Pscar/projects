<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Sale;


class SalesmonthController extends Controller
{
    public function pdf_salesmonth() {
        $sale = DB::table('sales') 
          ->select('*')
          ->get();
        $pdf = PDF::loadView('report/sales_pdf', ['sales'=>$sale]);
        return $pdf->stream('รายงานการขาย.pdf');//ชื่อไฟล์ PDF
  }
}
