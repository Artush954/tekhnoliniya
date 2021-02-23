@extends('app.layouts.app')

@section('title','About')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/css/style_slide.css') }}">
@endpush
@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{asset('assets/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title">{{$about->title}}</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$about->title}} </li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">{{$about->title}}</h2><!-- End .title text-center mb-2 -->
                          <p>{!! $about->description!!}</p>

                            <img src="{{asset('assets/images/about/about-2/signature.png')}}" alt="signature" class="mx-auto mb-5">

                            <img src="{{asset('assets/images/about/about-2/img-2.jpeg')}}" alt="image" class="mx-auto mb-6">
                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                </div><!-- End .row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-puzzle-piece"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Гарантированное качество</h3><!-- End .icon-box-title -->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Профессиональная поддержка:</h3><!-- End .icon-box-title -->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-heart-o"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Низкие цены</h3><!-- End .icon-box-title -->
{{--                                <p>Pellentesque a diam sit amet mi ullamcorper <br>vehicula. Nullam quis massa sit amet <br>nibh viverra malesuada.</p>--}}
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-2"></div><!-- End .mb-2 -->

            <div class="bg-image bg-overlay pt-5 pb-4" style="background-image: url(assets/images/backgrounds/bg-3.jpg)">
                <div class="container">
                    <h2 class="title text-center text-white mb-3">БЛАГОДАРНОСТИ</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-theme owl-testimonials owl-light" data-toggle="owl"
                         data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": true,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "768": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true
                                }
                            }
                        }'>
                        @foreach($thanks as $item)
                            <div class="thanks-images">
                                 <img src="{{ asset('images/'.$item->image) }}" style="width:100%;" alt="">
                            </div>
                            @endforeach

                    </div><!-- End .testimonials-slider owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-image pt-6 pb-6 -->
        <!-- Flickity HTML init -->


            <div class="bg-light-2 pt-6 pb-7 mb-6">
                <div class="container">
                    <h2 class="title text-center mb-4">О заводе</h2><!-- End .title text-center mb-2 -->

                    <div class="row">
                        @if(isset($about))
                            @forelse($about->gallery as $item)
                        <div class="col-sm-4">
                            <div class="member member-2 text-center">
                                <figure class="member-media">
                                    <img src="{{ asset('images/gallery/'.$item->image) }}" alt="member photo">


                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">О компании</h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-lg-3 -->
                            @empty
                                <div class="col-sm-6">
                                    No images
                                </div>
                            @endforelse
                        @endif

                    </div><!-- End .row -->

                    <div class="text-center mt-3">
                        <a href="{{route('ourwork')}}" class="btn btn-sm btn-minwidth-lg btn-outline-primary-2">
                            <span>Наши работы</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .text-center -->
                </div><!-- End .container -->
            </div><!-- End .bg-light-2 pt-6 pb-6 -->

        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
