@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 style="text-align: center;padding-top:35px;">About Abou El-Goukh</h1>
        <div class="row">
            <div class="col">
                <video controls playsinline id="myVideo" style="padding:25px;">
                    <source src="{{asset('assets/videos/aboelgoukh.mp4')}}" type="video/mp4" />
                  </video>
            </div>
        </div>
    </div>
@endsection