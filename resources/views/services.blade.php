
@extends('app.layouts.app')

@section('title','Category')

@section('content')

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">УСЛУГИ</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Grid 2 Columns</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <nav class="blog-nav">
                    <ul class="menu-cat entry-filter justify-content-center">
                  @foreach($services as $item)
                        <li><a href="{{route('services-page',['slug' => $item->slug,'id'=>$item->id])}}" data-filter=".hobbies">{{$item->title}}</a></li>
                        @endforeach
                    </ul><!-- End .blog-menu -->
                </nav><!-- End .blog-nav -->

                <div class="entry-container max-col-2" data-layout="fitRows">
                    @forelse($services as $item)

                    <div class="entry-item lifestyle shopping col-sm-6">
                        <article class="entry entry-grid text-center">
                            <figure class="entry-media">
                                <a href="{{route('services-page',['slug' => $item->slug,'id'=>$item->id])}}">
                                    <img src="{{asset('images/'.$item->image)}}"  alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">


                                <h2 class="entry-title">
                                    <a href="{{route('services-page',['slug' => $item->slug,'id'=>$item->id])}}">{{$item->title}}</a>
                                </h2><!-- End .entry-title -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .entry-item -->
                    @empty
                    @endforelse

                </div><!-- End .entry-container -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-next" href="#" aria-label="Next">
                                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
