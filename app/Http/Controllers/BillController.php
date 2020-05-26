<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
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
            $bills = Bil::where('amount', 'LIKE', "%$keyword%")
                ->orWhere('sale', 'LIKE', "%$keyword%")
                ->orWhere('sale_items', 'LIKE', "%$keyword%")
                ->orWhere('receipt_id', 'LIKE', "%$keyword%")
                ->orWhere('sale_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bills = Bil::latest()->paginate($perPage);
        }

        return view('bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Bill::create($requestData);

        return redirect('bills')->with('flash_message', 'bill added!');
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
        $bill = Bill::findOrFail($id);

        return view('bills.show', compact('bill'));
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
        $bill = Bill::findOrFail($id);

        return view('bills.edit', compact('bill'));
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
        
        $bill = Bill::findOrFail($id);
        $bill->update($requestData);

        return redirect('bills')->with('flash_message', 'bill updated!');
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
        Bill::destroy($id);

        return redirect('bills')->with('flash_message', 'bill deleted!');
    }
}