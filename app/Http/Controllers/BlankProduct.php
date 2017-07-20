<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class BlankProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$product = Products::orderby('created_at', 'asc')->paginate(5);

    	return view('admin.pages.index')->withProduct($product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *@param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required'
        ]);
        
        
        $product = new Products();
        
        $product->title = $request->title;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->photo = $request->photo;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->brand = $request->brand;
        
        $product->save();
        
        $request->session()->flash('success', 'All is ok');
        
        return redirect()->route('adminPanel.show', $product->id);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
     $product = Products::find($id);
     
     return view('admin.pages.show')->withProduct($product); 
      
}
        
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $product = Products::find($id);

	    return view('admin.pages.edit')->withProduct($Product);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
