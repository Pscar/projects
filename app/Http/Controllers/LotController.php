<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
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
            $lots = Lot::where('dete_exp', 'LIKE', "%$keyword%")
                ->orWhere('dete_enday', 'LIKE', "%$keyword%")
                ->orWhere('drug_id', 'LIKE', "%$keyword%")
                ->orWhere('cost', 'LIKE', "%$keyword%")
                ->orWhere('lot_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $lots = Lot::latest()->paginate($perPage);
        }

        return view('lots.index', compact('lots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('lots.create');
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
        
        Lot::create($requestData);

        return redirect('lots')->with('flash_message', 'lot added!');
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
        $lot = Lot::findOrFail($id);

        return view('lots.show', compact('lot'));
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
        $lot = Lot::findOrFail($id);

        return view('lots.edit', compact('lot'));
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
        
        $lot = Lot::findOrFail($id);
        $lot->update($requestData);

        return redirect('lots')->with('flash_message', 'lot updated!');
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
        Lot::destroy($id);

        return redirect('lots')->with('flash_message', 'lot deleted!');
    }
}
