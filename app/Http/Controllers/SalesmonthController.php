<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Sale;
use App\Bill;


class SalesmonthController extends Controller
{
    public function pdf_salesmonth() {
        $bills = Bill::all();
        $pdf = PDF::loadView('report/sales_pdf', ['bills'=>$bills]);
        return $pdf->stream('รายงานการขาย.pdf');//ชื่อไฟล์ PDF
  }
}
