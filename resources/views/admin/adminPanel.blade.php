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

                
                <h3>Categories</h3>
                <div class="float-right">
                    <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#createCategory">Create New Category</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="createCategoryLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{route('CategoryStore')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h3 class="modal-title" id="createCategoryLabel">Create New Category</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div><!-- End .modal-header -->

                                <div class="modal-body">
                                        <div class="form-group required-field">
                                            <label>Category Name </label>
                                            <input type="text" name="name" class="form-control form-control-sm" >
                                        </div><!-- End .form-group -->

                                        <div class="form-group required-field">
                                            <label>Category Image </label>
                                            <input type="file" name="image" class="form-control form-control-sm" >
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
                                        @foreach ($categories as $category)

                                        <thead>
                                            <tr>
                                                <th class="product-col">Category</th>
                                                <th class="qty-col"></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="product-row">
                                                <td class="product-col">
                                                    <figure class="product-image-container">
                                                        <a href="{{route('CategoryShow',$category->id)}}" class="product-image">
                                                            <img src="{{asset('storage/'.$category->image)}}" alt="product">
                                                        </a>
                                                    </figure>
                                                    <h2 class="product-title">
                                                        <a href="{{route('CategoryShow',$category->id)}}">{{$category->name}}</a>
                                                    </h2>
                                                </td>
                                                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addressModal">Edit</a></td>
                                                
                                                <td><a href="{{route('CategoryDelete',$category->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{route('CategoryEdit',$category->id)}}" method="POST">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="addressModalLabel">Edit Category</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div><!-- End .modal-header -->

                                                            <div class="modal-body">
                                                                    <div class="form-group required-field">
                                                                        <label>Category Name </label>
                                                                        <input type="text" name = "name" class="form-control form-control-sm" >
                                                                    </div><!-- End .form-group -->

                                                                    <div class="form-group required-field">
                                                                        <label>Category Image </label>
                                                                        <input type="file" name="image" class="form-control form-control-sm" >
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