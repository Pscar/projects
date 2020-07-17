<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Category;
use App\Sale;
use Illuminate\Http\Request;

class ProductController extends Controller
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
            $products = Product::where('pro_name', 'LIKE', "%$keyword%")
                ->orWhere('drug_id', 'LIKE', "%$keyword%")
                ->orWhere('contain', 'LIKE', "%$keyword%")
                ->orWhere('status_sale', 'LIKE', "%$keyword%")
                ->orWhere('saleprice', 'LIKE', "%$keyword%")
                ->orWhere('stock_ps', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }
            



        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //1. สร้างข้อมูลสินค้า
            $category = Category::all(); //ส่งค่า category เป็น id <!--เป็นการดึง PK จาก category มาแสดงผลในหน้า products-->
            return view('products.create', compact('category'));
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
        
        Product::create($requestData);

                                                                                                            
        return redirect('products')->with('flash_message', 'Product added!');
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
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
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
        $category = Category::all(); //ส่งค่า category เป็น id <!--เป็นการดึง PK จาก category มาแสดงผลในหน้า products-->
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product','category'));
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
        $product = Product::findOrFail($id); 
        
        
        $product->update($requestData);

        return redirect('products')->with('flash_message', 'Product updated!');
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
        Product::destroy($id);

        return redirect('products')->with('flash_message', 'Product deleted!');
    }
}
