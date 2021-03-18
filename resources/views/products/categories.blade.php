@extends('app.layouts.app')

@section('title','Каталог продукции')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">КАТАЛОГ ПРОДУКЦИИ</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>

                    <li class="breadcrumb-item active" aria-current="page">КАТАЛОГ</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">


                        <div class="products mb-3">
                            @foreach($category as $item)
                                <div class="product product-list">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <figure class="product-media">
                                                <a href="{{route('subcategories',['slug' => $item->slug])}}">
                                                    <img src="{{asset('images/'.$item->image)}}" alt="{{$item->title}}"
                                                         class="product-image">
                                                </a>
                                            </figure><!-- End .product-media -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        <div class="col-6 col-lg-3 order-lg-last">
                                            <div class="product-list-action">
                                                <a href="{{ route('subcategories',['slug' => $item->slug]) }}" class="btn btn-outline-dark btn-rounded">
                                                    <i class="icon-long-arrow-right"></i><span>Смотреть</span></a>
                                            </div><!-- End .product-list-action -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        <div class="col-lg-6">
                                            <div class="product-body product-action-inner">
                                                <div class="product-cat">
                                                    <a href="{{route('subcategories',['slug' => $item->slug])}}">
                                                        <h5>{{$item->title}}</h5>
                                                    </a>
                                                </div><!-- End .product-cat -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .product -->
                            @endforeach

                        </div><!-- End .products -->

                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <div class="widget widget-clean">
                                <label>Filters:</label>

                            </div><!-- End .widget widget-clean -->
                            @foreach($category as $item)

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                           aria-controls="widget-1">
                                            {{$item->title}}
                                        </a>
                                    </h3><!-- End .widget-title -->

                                    <div class="collapse show" id="widget-1">
                                        <div class="widget-body">
                                            <div class="filter-items filter-items-count">
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        @foreach($item->category as $sub_item )


                                                            <a href=""> <label
                                                                    class="custom-control-label">{{$sub_item->title}}</label></a>
                                                        @endforeach
                                                    </div><!-- End .custom-checkbox -->

                                                </div><!-- End .filter-item -->


                                            </div><!-- End .filter-items -->
                                        </div><!-- End .widget-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .widget -->
                        @endforeach
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
