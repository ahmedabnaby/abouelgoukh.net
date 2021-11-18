@extends('layouts.app')

@section('header')
<title>Abou El Goukh - Dashboard</title>
<meta name="description" content="Abou El Goukh started the business in 1952 & along time it became known as one the best importers of Bikes, Bicycles, Scooters, E-cars, Petrol Scooters, Motorcycles, Kids Equipment, & Kids Toys. We have some of the best brands worldwide in our field">
<meta name="keywords" content="A summary about of webpage content">
<link rel="canonical" href="http://abouelgoukhstore.com/admin" />
@endsection

@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 order-lg-last dashboard-content">
                <h2>My Dashboard</h2>

                <h3>Products</h3>
                <div class="float-right">
                    <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#createProduct">Create New Product</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="createProductLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{route('ProductStore')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h3 class="modal-title" id="createProductLabel">Create New Product</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div><!-- End .modal-header -->
                
                                <div class="modal-body">
                                        <div class="form-group required-field">
                                            <label>Product Name </label>
                                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Name" required/>
                                            <input type="hidden" name="category_id" value="{{$categoryid}}">
                                            <input type="hidden" name="status" value="1">
                                            
                                        </div><!-- End .form-group -->
                
                                        @if ($categoryid === '1')
                                        <div class="form-group required-field">
                                        <select name="sub_categories" id="sub_categories" class="form-control form-control-sm">
                                            @foreach ($subcategories as $subcategory)
                                                <option value={{$subcategory->id}}>{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        @endif
                                        <div class="form-group required-field">
                                            <label>Product Price </label>
                                            <input type="number" name="price" class="form-control form-control-sm" placeholder="Price" required />
                                        </div>

                                        <div class="form-group required-field">
                                            <label>Product Description </label>
                                            <textarea name="description" class="form-control form-control-sm" ></textarea>
                                        </div>

                                        <div class="form-group required-field">
                                            <label>Product Image </label>
                                            <input type="file" name="image" class="form-control form-control-sm" required>
                                        </div>
                
                
                                </div><!-- End .modal-body -->
                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                </div><!-- End .modal-footer -->
                            </form>
                        </div><!-- End .modal-content -->
                    </div><!-- End .modal-dialog -->
                </div><!-- End .modal -->
                                
                <main class="main">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-table-container">
                                    <table class="table table-cart">

                                        <thead>
                                            <tr>
                                                <th class="product-col">Product</th>
                                                <th class="qty-col">Price</th>
                                                <th class="qty-col"></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach ($products as $product)
                                        <tbody>
                                            <tr class="product-row">
                                                <td class="product-col">
                                                    <figure class="product-image-container">
                                                        @if ($product->status === 0)
                                                        <a href="#" class="product-image">
                                                            <img src="{{asset('assets/images/abouelgoukh/all/'.$product->image)}}" alt="product">
                                                        </a>

                                                        @else
                                                 
                                                        <a href="#" class="product-image">
                                                            {{-- <img src="{{asset('storage/'.$product->image)}}" alt="product"> --}}
                                                            <img src="{{env('AWS_URL').$product->image}}" alt="product"/>
                                                        </a>
                                                        @endif
                                                    </figure>
                                                    <h4 class="product-title">
                                                        {{$product->name}}
                                                    </h4>
                                                </td>
                                                <td class="product-title">{{number_format($product->price)}} EGP</td>

                                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addressModal-{{$product->id}}">Edit</a></td>
                                                
                                                @if ($product->visibility === 1)
                                                    <td><a href="{{route('ProductHide',$product->id)}}" class="btn btn-sm btn-default">Hide</a></td>
                                                @else
                                                    <td><a href="{{route('ProductShowHidden',$product->id)}}" class="btn btn-sm btn-success">Show</a></td>
                                                @endif

                                                <td><a href="{{route('ProductDelete',$product->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="addressModal-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div style="display: none;">
                                                        {{$productWhere=\App\Models\Products::where(['id' => $product->id])->get()}}
                                                        </div>
                                                    <div class="modal-content">
                                                        <form action="{{route('ProductEdit',$product->id)}}" enctype="multipart/form-data" method="POST">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="addressModalLabel">Edit Product</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div><!-- End .modal-header -->
                                                            <div class="modal-body">
                                                                <div class="form-group required-field">
                                                                    <label>Product Name </label>
                                                                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Name" value="{{$productWhere[0]->name}}" required/>
                                                                    <input type="hidden" name="category_id" value="{{$productWhere[0]->category_id}}">
                                                                    <input type="hidden" name="status" value="1">
                                                                    
                                                                </div><!-- End .form-group -->
                                        
                                                                <div class="form-group required-field">
                                                                    <label>Product Price </label>
                                                                    <input type="number" name="price" class="form-control form-control-sm" placeholder="Price" value="{{$productWhere[0]->price}}" required/>
                                                                </div>
                        
                        
                                                                <div class="form-group required-field">
                                                                    <label>Product Description </label>
                                                                    <textarea name="description" class="form-control form-control-sm" >{{$productWhere[0]->description}}</textarea>
                                                                </div>
                        
                                                                <div class="form-group required-field">
                                                                    <label>Product Image </label>
                                                                    <input type="file" name="image" class="form-control form-control-sm"  required/>
                                                                </div>
                                        
                                        
                                                        </div><!-- End .modal-body -->

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                                            </div><!-- End .modal-footer -->
                                                        </form>
                                                    </div><!-- End .modal-content -->
                                                </div><!-- End .modal-dialog -->
                                            </div><!-- End .modal -->
                                            @endforeach
                                        </tbody>
        
                                    </table>
                                </div><!-- End .cart-table-container -->
        
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </main><!-- End .main -->
                

            </div><!-- End .col-lg-9 -->

            <aside class="sidebar col-lg-3">
                <div class="widget widget-dashboard">
                    <h3 class="widget-title">My Account</h3>

                    <ul class="list">
                        <li><a href="{{route('dashboard')}}">Orders</a></li>
                        <li class="active"><a href="{{route('adminPanel')}}">Admin Panel</a></li>
                    </ul>
                </div><!-- End .widget -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->


</main><!-- End .main -->

    
@endsection