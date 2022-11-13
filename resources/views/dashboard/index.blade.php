@extends('dashboard.layouts.main')

@section('container')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">SISTEM INFORMASI KLINIK</h1>
        <div class="row">
            <div class="text-center">
                <img src="/img/klinik.jpg" class="img-thumbnail img-fluid" height="400" width="650">
            </div>
        </div>
    </div>
    <div class="" style="margin-top: 140px;">
        <p>Welcome Back, <b>{{ Auth()->user()->name }}</b> to dashboard</p>
    </div>
@endsection
