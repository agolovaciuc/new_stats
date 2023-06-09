@extends('layouts.layout')

@section('content')
    <div class="content">
        <div class="container-fluid g-5">
            <div class="row g-0 align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-4 text-center"><h1 class="widget20">404</h1>
                    <h2 class="mb-3">Page Not Found!</h2>
                    <p class="mb-4">Sorry we can't seem to find the page you're looking for. There may be amisspelling
                        in the URL entered, or the page you are looking for may no longer exist.</p><a
                        href="{{route('dashboard.index')}}" class="btn btn-label-primary btn-lg btn-widest">Back to home</a></div>
            </div>
        </div>
    </div>
@endsection
