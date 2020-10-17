<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Sale;
use App\Bill;


class SalesmonthController extends Controller
{
  public function reportsalesdate(Request $request) {
     
    $date = $request->get('date');

    $sales =  Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                    ->groupBy('product_id')
                    ->whereYear('created_at',$date)
                    ->get();

    return view('report.salesreport.reportsales_date',compact('sales')); // index
  }

  public function reportsalesmonth(Request $request) {
    $month = $request->get('month');
    $year = $request->get('year');

    $sales =  Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                    ->groupBy('product_id')
                    ->whereMonth('created_at',$month)
                    ->whereYear('created_at',$year)
                    ->get();

    return view('report.salesreport.reportsales_month',compact('sales')); // index
  }
  public function reportsalesyear(Request $request) {

    $year = $request->get('year');

    $sales =  Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                    ->groupBy('product_id')
                    ->whereYear('created_at',$year)
                    ->get();

    return view('report.salesreport.reportsales_year',compact('sales')); // index
  }

  // public function pdf_percost() {
  //   $bills = Bill::all();
  //   $pdf = PDF::loadView('report/percost_pdf', ['bills'=>$bills]);
  //   return $pdf->stream('รายงานต้นทุนกำไรประจำปี.pdf');//ชื่อไฟล์ PDF
  // }
}
