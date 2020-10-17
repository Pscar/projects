<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use App\Sale;
use App\Lot;
use App\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function reportdate(Request $req)
    {
        $method = $req->method();
        $date = $req->get('date');

        if ($req->isMethod('post'))
        {
            $date = $req->get('date');
            if ($req->has('search'))
            {
                // select search
                $search = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,
                        sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereDate('created_at',$date)
                                ->get();
                return view('report.salesreport.reportdate',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport =  Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,
                            sum(amount) as amount,sum(profit) as profit, sum(percost) as percost')
                                    ->groupBy('product_id')
                                    ->whereDate('created_at',$date)
                                    ->get();
                $pdf = PDF::loadView('report.salesreport.PDF_reportdate', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('รายงานยอดขายประจำวัน.pdf');
            }  
        }
            else
        {
            $ViewsPage = Sale::selectRaw('created_at, pro_name , product_id , saleprice,
            sum(total) as total,sum(amount) as amount')
                            ->groupBy('product_id')
                            ->whereDate('created_at',$date)
                            ->get();
            return view('report.salesreport.reportdate',['ViewsPage' => $ViewsPage]);       
         }
    }
    public function reportmonth(Request $req)
    {
        $method = $req->method();
        $month = $req->get('month');
        $year = $req->get('year');

        if ($req->isMethod('post'))
        {
            $month = $req->get('month');
            $year = $req->get('year');
            if ($req->has('search'))
            {
                // select search
                $search = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,
                sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereMonth('created_at',$month)
                                ->whereYear('created_at',$year)
                                ->get();
                return view('report.salesreport.reportmonth',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,
                sum(amount) as amount,sum(profit) as profit, sum(percost) as percost')
                                    ->groupBy('product_id')
                                    ->whereMonth('created_at',$month)
                                    ->whereYear('created_at',$year)
                                    ->get();
                $pdf = PDF::loadView('report.salesreport.PDF_reportmonth', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('รายงานยอดขายประจำเดือน');
            }  
        }else{
            $ViewsPage = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereMonth('created_at',$month)
                                ->whereYear('created_at',$year)
                                ->get();
            return view('report.salesreport.reportmonth',['ViewsPage' => $ViewsPage]);
                            
        }
    }
    public function reportyear(Request $req)
    {
        $method = $req->method();
        $year = $req->get('year');

        if ($req->isMethod('post'))
        {
            $year = $req->get('year');
            if ($req->has('search'))
            {
                // select search
                $search = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereYear('created_at',$year)
                                ->get();
                return view('report.salesreport.reportyear',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,
                sum(amount) as amount,sum(profit) as profit, sum(percost) as percost')
                                    ->groupBy('product_id')
                                    ->whereYear('created_at',$year)
                                    ->get();
                $pdf = PDF::loadView('report.salesreport.PDF_reportyear', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('รายงานยอดขายประจำปี');
            }  
        }else{

            $ViewsPage = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereYear('created_at',$year)
                                ->get();
            return view('report.salesreport.reportyear',['ViewsPage' => $ViewsPage]);
                            
        }
    }
    public function reportexpendituremonth(Request $req)
    {
        $method = $req->method();
        $month = $req->get('month');
        $year = $req->get('year');

        if ($req->isMethod('post')) {
        $month = $req->get('month');
        $year = $req->get('year');
            if ($req->has('search')) {
            $search =  Lot::selectRaw('drug_id, sum(cost) as cost, created_at')
                            ->groupBy('drug_id')
                            ->whereMonth('created_at', $month)
                            ->whereYear('created_at', $year)
                            ->get();
            return view('report.expendreport.expendituremonth',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport = Lot::selectRaw('drug_id, sum(cost) as cost, created_at')
                                    ->groupBy('drug_id')
                                    ->whereMonth('created_at', $month)
                                    ->whereYear('created_at', $year)
                                    ->get();

                $pdf = PDF::loadView('report.expendreport.PDF_expendmonth', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('รายงานการสั่งซื้อ');
            }  
        }else{
            $ViewsPage = Lot::selectRaw('drug_id, sum(cost) as cost, created_at')
                                ->groupBy('drug_id')
                                ->whereMonth('created_at', $month)
                                ->whereYear('created_at', $year)
                                ->get();

            return view('report.expendreport.expendituremonth',['ViewsPage' => $ViewsPage]);        
        }
    }
}
