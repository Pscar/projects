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
    return $pdf->stream('รายงานสั่งซื้อยา.pdf');
  }
  public function pdf_expenditureOct(){
    $lots =  Lot::selectRaw('drug_id, sum(cost) as cost, created_at')
                  ->groupBy('drug_id')
                  ->whereMonth('created_at', '8')
                  ->get();
    $pdf = PDF::loadView('report/expandmounth/expendOct_pdf', ['lots'=>$lots]);
    return $pdf->stream('รายงานการสั่งซื้อประจำเดือน.pdf');
  }

}
