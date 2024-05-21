@extends('layouts.app')

@section('content')
    <div class="p-0 cover-img">
        <img src="{{ asset('images/cover8.jpg') }}" alt="" width="100%" height="500vh">
        <div class="hero text-start">
            <p>Welcome to <span class="name">MenovaHub</span></p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
    <section class="pt-5 pb-5">
        <div class="container mt-5">
            @foreach ($categories as $category)
                <h1 class="mt-5">{{ $category->title }}</h1>
                <div id="carouselExampleControls{{ $category->id }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $counter = 0; ?>
                        @foreach ($cards->where('category_id', $category->id) as $card)
                            @if ($counter % 3 == 0 || $counter == 0)
                                <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                                    <div class="row">
                            @endif
                            <div class="col-md-4">
                                <div class="card">
                                    @php
                                        $categorySlug = str_replace(' ', '-', strtolower($category->title));
                                        $cardSlug = str_replace(' ', '-', strtolower($card->title));
                                    @endphp
                                    <a href="{{ '/application/' . $categorySlug . '/' . $cardSlug }}"
                                        class="text-decoration-none text-reset">
                                        <img src="{{ $card->img }}" class="card-img-top" alt="..."
                                            style="height: 200px;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $card->title }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php $counter++; ?>
                            @if ($counter % 3 == 0 || $counter == count($cards->where('category_id', $category->id)))
                    </div>
                </div>
            @endif
            @endforeach
        </div>
        @if ($counter > 3)
            <button class="carousel-control-prev " type="button"
                data-bs-target="#carouselExampleControls{{ $category->id }}" data-bs-slide="prev" aria-label="Previous">
                <span class="carousel-control-prev-icon rounded-pill" aria-hidden="true"></span>
                <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next rounded-circle" type="button"
                data-bs-target="#carouselExampleControls{{ $category->id }}" data-bs-slide="next" aria-label="Next">
                <span class="carousel-control-next-icon rounded-pill" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        @endif
        </div>
        @endforeach
        </div>
    </section>
@endsection
