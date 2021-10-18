<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SubCategories;
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
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $data = Categories::find($id);
        $path = $request->file('image')->store('images');
        $data->name = $request->name;
        $data->image = $path;
        $data->status = $request->status;
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
       $categories = Categories::all();
       $sub_categories = SubCategories::all();
       $sub_category_id = SubCategories::where('category_id',$id)->get();
    //    dd($sub_category_id);
       return view('admin.productsShow')->withProducts($products)->withCategoryid($id)->withCategories($categories)->withSubcategoryid($sub_category_id)->withSubcategories($sub_categories);
    }

    public function CategoryStore(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('images');
        $category = new Categories;
        $category->name = $request->name;
        $category->routeName = 'new';
        $category->image = $path;
        $category->status = $request->status;
        $category->save();
        // dd($category);
     
        return redirect()->route('adminPanel')
                        ->with('success','Category has been created successfully.');
    }
    public function NewCategoryShow($id)
    {
       $products = Products::where('category_id',$id)->get();
       $category = Categories::where('id',$id)->get();
       return view('products.NewCategoryShow')->withProducts($products)->withCategory($category);
    }
    public function ProductEdit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('images');
        $data = Products::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->category_id = $request->category_id;
        $data->image = $path;
        $data->status = $request->status;
        $data->description = $request->description;
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

    public function ProductStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if($request->category_id === '1')
        {
        $path = $request->file('image')->store('images');
        $product = new Products;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_categories;
        $product->image = $path;
        $product->routeName = 'new';
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->save();
        }
        else
        {
        $path = $request->file('image')->store('images');
        $product = new Products;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->image = $path;
        $product->routeName = 'new';
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->save();
        }
        return redirect()->back();
    }
    public function NewProductsShow($id)
    {
       $product = Products::where('id',$id)->get();
       return view('products.NewProductsShow')->withProduct($product);
    }

}
