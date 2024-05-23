@extends('layouts.app')


@section('content')
    @if ($products->isEmpty())
        <div class="container">
            <h1>No products available for this category.</h1>
        </div>
    @else
        <div class="container bg-white d-flex flex-wrap justify-content-center justify-content-lg-start gap-4 py-5">
            @foreach ($products as $product)
                <div class="card" style="width: 18rem;">
                    <img src={{ $product->img }} class="card-img-top" alt={{ $product->title }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->desc }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
