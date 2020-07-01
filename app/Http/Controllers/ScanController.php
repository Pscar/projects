<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Sale;
use App\Scan;

use Illuminate\Http\Request;

class ScanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $scan = Scan::where('drug_id', 'LIKE', "%$keyword%")
                ->orWhere('sale_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $scan = Scan::latest()->paginate($perPage);
        }

        return view('scan.index', compact('scan'));
    }
   
    public function create(Request $request)
    {
        

        return view('scan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request,$id)
    {
       /* $product = Product::findOrFail($id);
        $scan = Scan::where('drug_id', $product)
            ->where('drug_id',$product->drug_id)
            ->select('*')
            ->get();
            $requestData = $request->all();
            Scan::create($requestData);
            return redirect('sales/' . $product->drug_id .'/scan');
            return view('event.scan', compact('product','scan','sales'));*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $scan = Scan::findOrFail($id);

        return view('scan.show', compact('scan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $scan = Scan::findOrFail($id);

        return view('scan.edit', compact('scan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $scan = Scan::findOrFail($id);
        $scan->update($requestData);

        return redirect('scan')->with('flash_message', 'Scan updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Scan::destroy($id);

        return redirect('scan')->with('flash_message', 'Scan deleted!');
    }
}
