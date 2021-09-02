<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\SubsubCategories;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products',Products::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id,$sub_sub_category_id)
    {
        $product = Products::findOrFail($id);
        $sub_sub_categories = Products::where('subsub_category_id',$sub_sub_category_id)->get();
        return view('products.show')->withProduct($product)->withSubsubcategories($sub_sub_categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
    public function bicycles()
    {
        return view('products.bicycles')->with('bicycles',Products::all());
    }
    public function accessories()
    {
        return view('products.accessories')->with('accessories',Products::all());
    }
    public function show_accessories($id)
    {
        $accessory = Products::findOrFail($id);
        $accessories = Products::all();
        return view('products.show_accessories')->withProduct($accessory)->withAccessories($accessories);
    }
}
