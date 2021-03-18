@extends('app.layouts.app')

@section('title', $product->title)

@section('content')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
{{--                    <li class="breadcrumb-item"><a href="{{route('products')}}">КАТАЛОГ</a></li>--}}
                    <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-gallery">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="{{asset('images/'.$product->image)}}" data-zoom-image="{{asset('images/'.$product->image)}}" alt="{{ $product->title }}">
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            @forelse($product->gallery as $item)
                                            <a class="product-gallery-item" href="#" data-zoom-image="{{asset('images/gallery/'.$item->image)}}" data-image="{{asset('images/gallery/'.$item->image)}}">
                                                <img src="{{asset('images/gallery/'.$item->image)}}" alt="product side">
                                            </a>
                                            @empty
                                                No Image
                                            @endforelse
                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .product-gallery -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="product-details product-details-sidebar">
                                        <h1 class="product-title">{{$product->title}}</h1><!-- End .product-title -->

                                        <div class="product-price">
                                            {{$product->price}} &#8381;
                                        </div><!-- End .product-price -->

                                        <div class="details-filter-row details-row-size">
                                            <label>Цвет:</label>

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .details-filter-row -->

                                        <div class=" details-row-size">
                                            <label for="color_price">Цена(цветная) - {{$product->color_price}} </label>

                                        </div><!-- End .details-filter-row -->
                                        <div class=" details-row-size">
                                            <label for="price">Цена(серая) - {{$product->price}} </label>


                                        </div><!-- End .details-filter-row -->

                                        <div class=" details-row-size">
                                            <label for="color_price">Каличество - {{$product->amount}} шт/м2 </label>


                                        </div><!-- End .details-filter-row -->
                                        <div class=" details-row-size">
                                            <label for="color_price">Марка - {{$product->marka}} </label>


                                        </div><!-- End .details-filter-row -->
                                        <div class="product-details-action">

                                            <div class="details-action-col">


                                                <a href="#"  data-id="{{$product->id}}"
                                                   data-title="{{ $product->title }}"
                                                   data-image="{{ $product->image }}"
                                                   data-price="{{ $product->price }}"
                                                   class="btn-product btn-cart addCart"><span>В Корзину</span></a>
                                            </div><!-- End .details-action-col -->


                                        </div><!-- End .product-details-action -->


                                    </div><!-- End .product-details -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-details-top -->

                        <hr class="mb-5">


                        <h2 class="title text-center mb-4">СОПУТСТВУЮЩИЕ ТОВАРЫ</h2><!-- End .title text-center -->
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>

                            @foreach($similarProducts as $item)
                                <div class="product product-4 text-center">
                                    <figure class="product-media">
                                        <a href="{{ route('product-viewpage',['slug'=>$item->slug]) }}">
                                            <img src="{{asset('images/thumb/'.$item->image)}}" alt="Product image" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="{{ route('product-viewpage',['slug'=>$item->slug]) }}">{{ $item->title }}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{ $item->price }} &#8381;
                                        </div><!-- End .product-price -->
                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                            <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            @endforeach

                        </div><!-- End .owl-carousel -->
                    </div><!-- End .col-lg-9 -->


                </div><!-- End .row -->

            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
