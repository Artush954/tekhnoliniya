@extends('app.layouts.app')

@section('title','Услуги')

@section('content')
    <main class="main">
        {{--  TODO poxel nkar@  --}}
        <div class="page-header text-center"
             style="background-image: url({{ asset('assets/images/page-header-bg.jpg') }})">
            <div class="container">
                <h1 class="page-title">УСЛУГИ</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Услуги</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="entry-container max-col-2" data-layout="fitRows">
                    @foreach($services as $service)
                        <div class="entry-item lifestyle shopping col-sm-6">
                            <article class="entry entry-grid text-center">
                                <figure class="entry-media">
                                    <a href="{{route('services-page',['slug' => $service->slug])}}">
                                        <img src="{{asset('images/'.$service->image)}}" alt="image desc">
                                    </a>
                                </figure><!-- End .entry-media -->
                                <div class="entry-body">
                                    <h2 class="entry-title">
                                        <a href="{{ route('services-page',['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                    </h2><!-- End .entry-title -->
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                        </div><!-- End .entry-item -->
                    @endforeach
                </div><!-- End .entry-container -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
