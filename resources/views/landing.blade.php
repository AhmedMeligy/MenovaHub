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
                                    <form action="{{ url(Str::slug($category->title) . '/' . Str::slug($card->title)) }}" method="POST" class="text-decoration-none text-reset" style="display: flex; flex-direction: column; height: 100%;">
                                        @csrf
                                        <input type="hidden" name="card_id" value="{{ $card->id }}">
                                        <button type="submit" class="btn btn-link p-0" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: start; width: 100%; height: 100%; border: none; background: none;">
                                            <img src="{{ $card->img }}" class="card-img-top" alt="..." style="height: 200px; width: 100%;">
                                            <div class="card-body" style="flex-grow: 1;">
                                                <h5 class="card-title">{{ $card->title }}</h5>
                                            </div>
                                        </button>
                                    </form>
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
