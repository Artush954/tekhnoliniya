@extends('app.layouts.app')

@section('title','Category')

@section('content')

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Наши работы</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Наши работы</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">


            <div class="container-fluid">
                <nav class="portfolio-nav">
                    <ul class="nav-filter portfolio-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        @foreach($service as $item)
                        <li><a href="#" data-filter="item-{{$item->id}}">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                </nav><!-- End .portfolio-nav -->

                <div class="portfolio-container portfolio-nogap" data-layout="fitRows">
                    @if(isset($photo))
                        @forelse($photo as $item)

                    <div class="portfolio-item accessories item-{{$item->service->id}} col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="{{asset('images/'.$item->image)}}" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">{{$item->service->title}}</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->
                        @empty
                            <div  >
                                <h1 style="text-align: center; padding-top: 70px;">No images</h1>
                            </div>
                        @endforelse
                    @endif

                </div><!-- End .portfolio-container -->
            </div><!-- End .container-fluid -->
        </div><!-- End .page-content -->

        <!-- Elements list -->

    </main><!-- End .main -->
@endsection
