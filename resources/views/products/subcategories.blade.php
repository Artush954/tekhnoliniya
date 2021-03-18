@extends('app.layouts.app')

@section('title', $category->title)

@section('content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url('{{asset('assets/images/page-header-bg.jpg')}}')">
            <div class="container">

                <h1 class="page-title">{{ $category->title }}</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="products mb-3">
                            <div class="row justify-content-center">
                                @foreach($subcategory as $item)
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="{{ route('productList',['subCategory' => $item->slug])}}">
                                                    <img src="{{asset('images/'.$item->image) }}" alt="Product image"
                                                         class="product-image">
                                                </a>
                                            </figure><!-- End .product-media -->
                                            <div class="product-body">
                                                <div class="product-cat">
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a
                                                        href="{{ route('productList',['subCategory' => $item->slug])}}">{{$item->title}}</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                                @endforeach

                            </div><!-- End .row -->
                        </div><!-- End .products -->


                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true"
                                       aria-controls="widget-1">
                                        {{$item->title}}
                                    </a>
                                </h3><!-- End .widget-title -->



                                <div class="collapse show" id="subcategory">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            @foreach($subcategory as $item)
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="item-{{ $item->id }}" >
                                                        <label class="custom-control-label"
                                                               for="item-{{ $item->id }}">
                                                            <a href="{{ route('productList',['subCategory' => $item->slug])}}" style="color: #333">
                                                                {{ $item->title }}</a></label>
                                                    </div><!-- End .custom-checkbox -->
                                                </div><!-- End .filter-item -->
                                            @endforeach

                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
