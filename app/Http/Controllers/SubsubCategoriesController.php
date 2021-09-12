<?php

namespace App\Http\Controllers;

use App\Models\SubsubCategories;
use App\Models\Products;
use Illuminate\Http\Request;

class SubsubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\SubsubCategories  $subsubCategories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_sub_categories = Products::where('subsub_category_id',$id)->get();
        return view('products.bicycles.subsub_categories.show_bicycles')->withSubsubcategories($sub_sub_categories)->withSubsubcategoryid($id);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubsubCategories  $subsubCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(SubsubCategories $subsubCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubsubCategories  $subsubCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubsubCategories $subsubCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubsubCategories  $subsubCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubsubCategories $subsubCategories)
    {
        //
    }
}
