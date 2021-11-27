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
        // $path = $request->file('image')->store('images');
        $data->name = $request->name;
        $image = $request->file('image');
        $file_name = uniqid() .'.'. $image->getClientOriginalName();
        $s3 = \Storage::disk('s3');
        $s3filePath = '/' . $file_name;
        $s3->put($s3filePath, file_get_contents($image), 'public');

        $data->image = $file_name;
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
        $image = $request->file('image');
        $file_name = uniqid() .'.'. $image->getClientOriginalName();
        $s3 = \Storage::disk('s3');
        $s3filePath = '/' . $file_name;
        $s3->put($s3filePath, file_get_contents($image), 'public');
        // dd($s3);
        // $path = $request->file('image')->store('public/images');
        $category = new Categories;
        $category->name = $request->name;
        $category->routeName = 'new';
        $category->image = $file_name;
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
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'image3' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $file_name = uniqid() .'.'. $image->getClientOriginalName();
        $s3 = \Storage::disk('s3');
        $s3filePath = '/' . $file_name;
        $s3->put($s3filePath, file_get_contents($image), 'public');
        if($image2 != null && $image3 != null)
        {
            $file_name2 = uniqid() .'.'. $image2->getClientOriginalName();
            $s3 = \Storage::disk('s3');
            $s3filePath = '/' . $file_name2;
            $s3->put($s3filePath, file_get_contents($image2), 'public');

            $file_name3 = uniqid() .'.'. $image3->getClientOriginalName();
            $s3 = \Storage::disk('s3');
            $s3filePath = '/' . $file_name3;
            $s3->put($s3filePath, file_get_contents($image3), 'public');
            
            $data = Products::find($id);
            $data->name = $request->name;
            $data->price = $request->price;
            $data->category_id = $request->category_id;
            $data->image = $file_name;
            $data->image2 = $file_name2;
            $data->image3 = $file_name3;
            $data->status = $request->status;
            $data->description = $request->description;
            $data->save();
            return redirect()->back();
        }
        if($image2 != null)
        {
            $file_name2 = uniqid() .'.'. $image2->getClientOriginalName();
            $s3 = \Storage::disk('s3');
            $s3filePath = '/' . $file_name2;
            $s3->put($s3filePath, file_get_contents($image2), 'public');
            $data = Products::find($id);
            $data->name = $request->name;
            $data->price = $request->price;
            $data->category_id = $request->category_id;
            $data->image = $file_name;
            $data->image2 = $file_name2;
            $data->status = $request->status;
            $data->description = $request->description;
            $data->save();
            return redirect()->back();
        }
        else
        {
            $data = Products::find($id);
            $data->name = $request->name;
            $data->price = $request->price;
            $data->category_id = $request->category_id;
            $data->image = $file_name;
            $data->status = $request->status;
            $data->description = $request->description;
            $data->save();
            return redirect()->back();
        }
    }
    public function ProductDelete($id)
    {
        // dd($id);
        Products::where('id',$id)->delete();
        return redirect()->back();

    }
    public function ProductHide($id)
    {
        $product = Products::find($id);
        $product->visibility = '0';
        $product->save();
        return redirect()->back();

    }
    public function ProductShowHidden($id)
    {
        $product = Products::find($id);
        $product->visibility = '1';
        $product->save();
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
        $image = $request->file('image');
        $file_name = uniqid() .'.'. $image->getClientOriginalName();
        $s3 = \Storage::disk('s3');
        $s3filePath = '/' . $file_name;
        $s3->put($s3filePath, file_get_contents($image), 'public');
        // $path = $request->file('image')->store('images');
        $product = new Products;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_categories;
        $product->image = $file_name;
        $product->routeName = 'new';
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->save();
        }
        else
        {
        // $path = $request->file('image')->store('images');
        $image = $request->file('image');
        $file_name = uniqid() .'.'. $image->getClientOriginalName();
        $s3 = \Storage::disk('s3');
        $s3filePath = '/' . $file_name;
        $s3->put($s3filePath, file_get_contents($image), 'public');
        $product = new Products;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->image = $file_name;
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
