@extends('layouts.app')


@section('content')
    @if ($products->isEmpty())
        <div class="container">
            <h1>No products available for this category.</h1>
        </div>
    @else
<h1>
    @foreach ($products as $product)
        {{$product->title}}
    @endforeach
</h1>
    @endif
@endsection
