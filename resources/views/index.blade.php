@extends('app.layouts.app')

@section('title','Главная')

@section('content')
    <main class="main">
        <div class="intro-slider-container mb-4">
            <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "responsive": {
                            "992": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                @foreach($sliders as $item)
                    <div class="intro-slide" style="background-image: url({{asset('images/'.$item->image)}});">
                        <div class="container intro-content">

                            <h1 class="intro-title text-white">{{$item->short_text}} </h1>

                            <a href="#" class="btn btn-outline-primary-2 min-width-sm">
                                <span>Посмотреть</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                @endforeach


            </div><!-- End .intro-slider owl-carousel owl-simple -->

            <span class="slider-loader"></span><!-- End .slider-loader -->
        </div><!-- End .intro-slider-container -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-info-circle"></i>
                                </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Доступная цена</h3><!-- End .icon-box-title -->
                            <p>Собственное производство
                                позволяет фиксировать цены</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-star-o"></i>
                                </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Товар всегда в наличии</h3><!-- End .icon-box-title -->
                            <p>Принимаем заказы
                                круглосуточно 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-heart-o"></i>
                                </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Доставка в день заказа</h3><!-- End .icon-box-title -->
                            <p>Собственный автопарк
                                из 6 манипуляторов</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-cog"></i>
                                </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Укладка плитки «под ключ»</h3><!-- End .icon-box-title -->
                            <p>6 бригад укладчиков
                                с опытом работы 18 лет</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-3 col-sm-6 -->
            </div>


            <hr class="mt-2 mb-5">
            <h2 class="title text-center mb-3">Продукты</h2><!-- End .title -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow product-4-carousel"
                 data-toggle="owl"
                 data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
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
                                    "items":5
                                }
                            }
                        }'>
                @forelse($products as $item)
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
                @empty
                @endforelse

            </div><!-- End owl-carousel -->

            <hr class="mt-0 mb-5">

            <h2 class="title text-center mb-3">НАША ПРОДУКЦИЯ</h2>

            <div class="row">
                @forelse($catalogs as $catalog)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-3">
                            <figure class="product-media">
                                <a href="{{ route('subcategories',['slug'=>$catalog->slug]) }}">
                                    <img src="{{ asset('images/'.$catalog->image) }}"
                                         alt="{{ $catalog->title }}"
                                         class="product-image">
                                </a>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a
                                        href="{{ route('subcategories',['slug'=>$catalog->slug]) }}">{{ $catalog->title }}</a>
                                </h3>
                                <!-- End .product-title -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                @empty
                @endforelse
            </div>

            <hr class="mt-0 mb-5">

            <h2 class="title text-center mb-3">НАШИ УСЛУГИ</h2>

            <div class="row justify-content-center">
                @forelse($topServices as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="banner">
                            <a href="#">
                                <img src="{{ asset('images/'.$service->image) }}" alt="{{ $service->title }}">
                            </a>
                            <div class="banner-content">
                                <h3 class="banner-title">{{ $service->title }}</h3>
                                <!-- End .banner-title -->
                                <a href="#" class="banner-link">Узнать больше</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->
                @empty
                @endforelse
            </div>
        </div>
    </main><!-- End .main -->
@endsection
