<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
// use Request;

class CategoriesController extends Controller
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
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('admin.adminPanel',compact($category));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function CategoryEdit(Request $request, $id)
    {
        $data = Categories::find($id);
        $data->name = $request->name;
        $data->image = $request->image;
        $data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function CategoryDelete($id)
    {
        // dd($id);
        Categories::where('id',$id)->delete();
        return redirect()->back();

    }
    public function CategoryShow($id)
    {
       $products = Products::where('category_id',$id)->get();
       return view('admin.productsShow')->withProducts($products);
    }

    public function CategoryStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images');
        $category = new Categories;
        $category->name = $request->name;
        $category->image = $path;
        dd($category);
        $category->save();
     
        return redirect()->route('adminPanel')
                        ->with('success','Category has been created successfully.');


        // $rules = array(
        //     'name'       => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // );
        // $validator = \Validator::make(Request::all(), $rules);
        
        
        
        // $input = Request::all();
        // dd($validator);

  

        // if ($image = Request::file('image')) {

        //     $destinationPath = 'image/';

        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

        //     $image->move($destinationPath, $profileImage);

        //     $input['image'] = "$profileImage";

        // }

    

        // Categories::create($input);

     

        // return redirect()->route('adminPanel')

        //                 ->with('success','Category created successfully.');

    }

    public function ProductEdit(Request $request, $id)
    {
        $data = Products::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->image = $request->image;
        $data->save();
        return redirect()->back();
    }
    public function ProductDelete($id)
    {
        // dd($id);
        Products::where('id',$id)->delete();
        return redirect()->back();

    }
    public function ProductShow($id)
    {
       $products = Products::where('category_id',$id)->get();
       return view('admin.productsShow')->withProducts($products);
    }
}
