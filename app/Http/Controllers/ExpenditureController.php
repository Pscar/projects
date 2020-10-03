<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Lot;
use App\Product;

class ExpenditureController extends Controller
{
    public function pdf_expenditure() {
        $lots = Lot::all();
          $pdf = PDF::loadView('report/expend_pdf', ['lots'=>$lots] );
          return $pdf->stream('รายงานสั่งซื้อยา.pdf'); //แบบนี้จะ stream มา preview
          //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
  }
}
