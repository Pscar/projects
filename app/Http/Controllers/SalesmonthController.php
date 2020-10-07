<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Sale;
use App\Bill;


class SalesmonthController extends Controller
{
  public function report(Request $request) {
     
    $requestData = $request->all();

    if (!empty($yearselect)) {
      $sales =  Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                    ->groupBy('product_id')
                    ->whereYear('created_at',$requestData['yearselect'])
                    ->get();
    } else {
      $sales = [];
    }
    return view('report',compact('sales')); // index
    
  }
  public function pdf_salesmonth() {
    $bills = Bill::all();
    $pdf = PDF::loadView('report/sales_pdf', ['bills'=>$bills]);
    return $pdf->stream('รายงานการขายประจำปี.pdf');//ชื่อไฟล์ PDF
  }
  public function pdf_percost() {
    $bills = Bill::all();
    $pdf = PDF::loadView('report/percost_pdf', ['bills'=>$bills]);
    return $pdf->stream('รายงานต้นทุนกำไรประจำปี.pdf');//ชื่อไฟล์ PDF
  }
  public function pdf_salesmouthJan(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '1')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleJan_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนมกราคม.pdf');
  }
  public function pdf_salesmouthFeb(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '2')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleFeb_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนกุมภาพันธ์.pdf');
  }
  public function pdf_salesmouthMar(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '3')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleMar_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายมีนาคม.pdf');
  }
  public function pdf_salesmouthApr(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '4')
                  ->get();
  $pdf = PDF::loadView('report/salemounth/saleApr_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนเมษายน.pdf');
  }
  public function pdf_salesmouthMay(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '5')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleMay_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนพฤษภาคม.pdf');
  }
  public function pdf_salesmouthJun(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '6')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleJun_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนมิถุนายน.pdf');
  }
  public function pdf_salesmouthJul(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                    ->groupBy('pro_name')
                    ->whereMonth('created_at', '7')
                    ->get();
    $pdf = PDF::loadView('report/salemounth/saleJul_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนกรกฏาคม.pdf');
  }
  public function pdf_salesmouthAug(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '8')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleAug_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนสิงหาคม.pdf');
  }
  public function pdf_salesmouthSep(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '9')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleSep_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนกันยายน.pdf');
  }
  public function pdf_salesmouthOct(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total,sum(amount) as amount')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at','10')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleOct_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนตุลาคม.pdf');
  }
  public function pdf_salesmouthNov(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '11')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleNov_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนพฤศจิกายน.pdf');
  }
  public function pdf_salesmouthDec(){
    $sales =  Sale::selectRaw('created_at, pro_name , saleprice,sum(total) as total,sum(amount) as amount ')
                  ->groupBy('pro_name')
                  ->whereMonth('created_at', '12')
                  ->get();
    $pdf = PDF::loadView('report/salemounth/saleDec_pdf', ['sales'=>$sales]);
    return $pdf->stream('รายงานยอดขายเดือนธันวาคม.pdf');
  }
  
}
