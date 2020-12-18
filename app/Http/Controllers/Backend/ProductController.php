<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// $products = Product::all();
		// return view('backends.admin.product.index')->with('products',$products);
		$products = Product::all();
  
        return view('backends.admin.product.index',compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view ('backends.admin.product.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
		$request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required',
        ]);
        Product::create($request->all());

        return redirect()->route('product.index')->with('success','Product created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$product = Product::find($id);
		return view('backends.admin.product.show',compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);
		return view('backends.admin.product.edit',compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$product = Product::find($id);
		$request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required',
        ]);
  		// $product= Product::update($request->all());
        $product->update($request->all());
  
        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$product = Product::find($id);
		if(!empty($product)){
			$product->delete();
        	return redirect()->route('product.index')
                        ->with('success','Products deleted successfully');

        }else{
        	// ddaa('No data');
			return redirect()->route('product.index')
			                ->with('danger','Products deleting failed!');

		}
	}
}
