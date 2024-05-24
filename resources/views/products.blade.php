@extends('layouts.app')


@section('content')

    <div class="mt-2 ms-5">
        <a class="btn btn-secondary btn-hover-green fw-medium" href='/'>Home</a>
    </div>

    <style>
        .btn-hover-green:hover {
            background-color: #164863;
            border-color: #164863;
        }
    </style>


    @if ($products->isEmpty())
        <div class="container text-center">
            <h1>No products available for this category.</h1>
        </div>
    @else
        <div class="container bg-white d-flex flex-wrap justify-content-between">
            @foreach ($products as $product)
                <div class="card col-md-3 m-5">
                    <img src={{ $product->img }} class="card-img-top" alt={{ $product->title }}>
                    <div class="card-body text-white">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->desc }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
