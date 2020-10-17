<?php

namespace App\Http\Controllers;
use DB;
use PDF;
use App\Sale;
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
                $search = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereDate('created_at',$date)
                                ->get();
                return view('reportdate',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport =  Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                    ->groupBy('product_id')
                                    ->whereDate('created_at',$date)
                                    ->get();
                $pdf = PDF::loadView('PDF_reportdate', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('ยอดขายประจำวัน.pdf');
            }  
        }
            else
        {
            $ViewsPage = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                            ->groupBy('product_id')
                            ->whereDate('created_at',$date)
                            ->get();
            return view('reportdate',['ViewsPage' => $ViewsPage]);       
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
                $search = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereMonth('created_at',$month)
                                ->whereYear('created_at',$year)
                                ->get();
                return view('reportmonth',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                    ->groupBy('product_id')
                                    ->whereMonth('created_at',$month)
                                    ->whereYear('created_at',$year)
                                    ->get();
                $pdf = PDF::loadView('PDF_reportmonth', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('ยอดขายประจำเดือน');
            }  
        }else{
            $ViewsPage = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereMonth('created_at',$month)
                                ->whereYear('created_at',$year)
                                ->get();
            return view('reportmonth',['ViewsPage' => $ViewsPage]);
                            
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
                return view('reportyear',['ViewsPage' => $search]);
            } 
            elseif ($req->has('exportPDF'))
            {
                // select PDF
                $PDFReport = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                    ->groupBy('product_id')
                                    ->whereYear('created_at',$year)
                                    ->get();
                $pdf = PDF::loadView('PDF_reportyear', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
                return $pdf->download('ยอดขายประจำปี');
            }  
        }else{

            $ViewsPage = Sale::selectRaw('created_at, pro_name , product_id , saleprice,sum(total) as total,sum(amount) as amount')
                                ->groupBy('product_id')
                                ->whereYear('created_at',$year)
                                ->get();
            return view('reportyear',['ViewsPage' => $ViewsPage]);
                            
        }
    }
}
