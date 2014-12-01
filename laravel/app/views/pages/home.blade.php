@extends('layouts.main')

@section('title')
    Camper Trailer Hire Brisbane - Hire My Camper Trailer
@endsection

@section('description')
    Hire my camper trailer offers high quality camper trailers for hire in the Brisbane metro area
@endsection

@section('slideshow')
<div class="slideshow">
    <div class="slide">
        <div class="bg" style="background: url('images/topography.jpg') repeat-x;background-size:100%;"></div>
        <div class="container">
            <div class="textArea">
                <h1>ACCESS REMOTE AREAS <span class="lobster"><i>with all the mod cons</i></span></h1>
            </div><!-- end textArea -->
            <div class="image">
                <img src="images/camper.png" width="415">
            </div>
        </div>
    </div>
</div><!-- end slideshow -->
@endsection

@section('content')
    <div class="container">
        <h1 class="center">Our Current Camper Trailer Range</h1>

        <div class="campers">

            @if($products)
                @foreach($products as $product)
                <div class="camper">
                    @if($product->product_images)
                    <a href="{{ route('show.product', ['id' => $product->id]) }}">
                        <img src="/uploads/{{ unserialize($product->product_images)[0] }}">
                    </a>
                    @endif
                    <h2>{{ $product->product_name }}</h2>
                    <h3 class="red">{{ money($product->product_cost) }} per day</h3>
                    <p>{{ $product->excerpt }}</p>
                    <a class="book" href="{{ route('show.product', ['id' => $product->id]) }}">Read More</a>
                </div>
                @endforeach
            @endif

        </div><!-- end campers -->
        <div style="clear:both;"></div>
    </div><!-- end container -->
@endsection