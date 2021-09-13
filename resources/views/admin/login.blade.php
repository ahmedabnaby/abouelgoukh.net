@extends('layouts.app')
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <h1>Login</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="heading">
                    <h2 class="title">Enter your credentials.</h2>
                </div><!-- End .heading -->

                @if($errors->any())
                <div class="alert alert-danger alert-intro" role="alert">
                    {{$errors->first()}}
                </div><!-- End .alert -->

                <div class="mb-4"></div><!-- margin -->
                @endif
                <form method="POST" action="{{ route('admin_login')}}">
                    @csrf
                        
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                        <a href="#" class="forget-pass"> Forgot your password?</a>
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .col-md-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</main><!-- End .main -->

@endsection